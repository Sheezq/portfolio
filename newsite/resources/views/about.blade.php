<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Узнайте больше о нашей компании, команде и истории">
    <title>О нас</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: rgba(4, 25, 62, 1);
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            text-align: center;
            margin: 20px 0;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        section {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #FFFFFF;
        }
        p {
            line-height: 1.6;
        }
        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .team-member {
            text-align: center;
            margin: 20px;
            width: 30%;
        }
        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        footer {
            background-color: rgba(4, 25, 62, 1);
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
<header>
    <h1>О нас</h1>
</header>

<nav>
    <a href="/">Главная</a>
    <a href="/services">Услуги</a>
    <a href="/about">О нас</a>
    <a href="/contact">Контакты</a>
</nav>

<section>
    <h2>Кто мы?</h2>
    <p>Наша компания существует на рынке уже более 10 лет. Мы гордимся тем, что предоставляем высококачественные продукты и услуги нашим клиентам. Наши основные принципы — это честность, качество и инновации.</p>

    <h2>Наша миссия</h2>
    <p>Мы стремимся к тому, чтобы улучшить жизнь наших клиентов, предлагая эффективные решения, которые делают их жизнь проще и удобнее. Вся наша деятельность направлена на улучшение и расширение возможностей каждого человека.</p>

    <h2>Наша команда</h2>
    <div class="team">
        <div class="team-member">
            <img src="team-member1.jpg" alt="Имя сотрудника 1">
            <h3>Имя сотрудника 1</h3>
            <p>Должность: Генеральный директор</p>
        </div>
        <div class="team-member">
            <img src="team-member2.jpg" alt="Имя сотрудника 2">
            <h3>Имя сотрудника 2</h3>
            <p>Должность: Главный инженер</p>
        </div>
        <div class="team-member">
            <img src="team-member3.jpg" alt="Имя сотрудника 3">
            <h3>Имя сотрудника 3</h3>
            <p>Должность: Руководитель отдела маркетинга</p>
        </div>
    </div>
</section>

<footer>
    <p>© 2024 Наша компания. Все права защищены.</p>
</footer>
</body>
</html>
