# 🛍️ Online Store (Laravel)

Полнофункциональный интернет-магазин с административной панелью, реализованный на Laravel с использованием Docker-окружения.

## 🚀 Быстрый старт

### Установка и запуск

```bash
# 1. Клонировать репозиторий
git clone https://github.com/ziyoviddin7/online_store.git
cd online_store

# 2. Сборка и запуск контейнеров
docker compose up -d --build

# 3. Установка зависимостей
docker compose exec php-cli
composer install

# 4. Настройка прав (для Linux/macOS)
sudo chmod 777 -R ./

# 5. Выполнение миграций с тестовыми данными
php artisan migrate:fresh --seed
```

## 🌐 Доступ к приложению
- Основное приложение: http://localhost:8080
- Админ-панель: http://localhost:8080/admin/login
  - **Логин**: `jon@gmail.com`
  - **Пароль**: `1234`
