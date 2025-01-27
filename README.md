# Treasury Assignment Blog 

Welcome to the Blog system, power by Laravel and Jetstream starter kit.

## Features

1. User and Authentication
2. Team
3. Blog Post CRUD

## Coming soon Feature
- Upload banner for blog post
- Blog comment CRUD
- Like Blog Post 

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP 8+
- Composer
- Docker (For database)

## Getting Started
```bash
git clone https://github.com/mayWz/treasury-assignment-blog.git
cd treasury-assignment-blog
docker compose up -d 
composer install
cp .env.example .env
----------------
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install
----------------
// to run application
npm run dev
php artisan serve
----------------
// to clear all cache
php artisan optimize:clear
```

#### Useful cli scripts

#### Troubleshooting

## Contact

email to maywza[at]gmail.com

## License

None
