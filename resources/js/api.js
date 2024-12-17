import axios from "axios";

const api = axios.create();

// Интерсептор для запроса
api.interceptors.request.use(
    config => {
        // Получаем токен из localStorage
        const token = JSON.parse(localStorage.getItem('access_token'));
        if (token) {
            config.headers['Authorization'] = `Bearer ${token}`;
        }
        return config;
    },
    error => {
        // Обработка ошибок в запросе (например, логирование)
        console.error('Request error:', error);
        return Promise.reject(error);
    }
);

// Интерсептор для ответа
api.interceptors.response.use(
    response => {
        // Можно добавить обработку ответа, если нужно
        return response;
    },
    error => {
        // Обработка ошибок в ответах (например, если токен истек)
        console.error('Response error:', error);
        return Promise.reject(error);
    }
);

export default api
