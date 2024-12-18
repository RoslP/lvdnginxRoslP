import axios from "axios";

const api = axios.create();

// Интерсептор для запроса
api.interceptors.request.use(
    config => {
        // Получаем токен из localStorage
        const token = localStorage.getItem('access_token');
        if (token) {
            config.headers['Authorization'] = `Bearer ${token}`;
        }
        return config;
    },
    error => {
        // Обработка ошибок в запросе
        console.error('Request error:', error);
        return Promise.reject(error);
    }
);

// Интерсептор для ответа
api.interceptors.response.use(
    response => {
        // Простой возврат ответа, если ошибок нет
        return response;
    },
    async error => {
        // Обработка ошибок в ответах
        const originalRequest = error.config;

        // Если ошибка из-за истекшего токена (например, код ошибки 401 и сообщение "Token has expired")
        if (error.response.data.message === 'Token has expired') {
            // Получаем refresh token
            const refreshToken = localStorage.getItem('access_token');

            if (!refreshToken) {
                // Если нет refresh токена, нужно направить пользователя к странице логина или в другую логику
                return Promise.reject(error);
            }

            // Обновляем токен с помощью refresh token
            try {
                // Выполняем запрос на обновление токена
                const response = await axios.post('/api/auth/refresh', { token: refreshToken });

                // Сохраняем новый access token в localStorage
                localStorage.setItem('access_token', response.data.access_token);

                // Обновляем заголовки с новым токеном
                originalRequest.headers['Authorization'] = `Bearer ${response.data.access_token}`;

                // Повторяем исходный запрос с новым токеном
                return api(originalRequest);
            } catch (err) {
                // Если не удается обновить токен (например, refresh token тоже истек), нужно перенаправить на страницу логина
                console.error('Refresh token error', err);
                return Promise.reject(err);
            }
        }

        // Если ошибка не связана с истекшим токеном, просто отклоняем промис с ошибкой
        return Promise.reject(error);
    }
);

export default api;
