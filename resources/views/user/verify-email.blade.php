<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                Проверка эл. почты
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                    @if (session('message'))
                        <h1 class="font-bold text-gray-900 dark:text-white" style="text-align: center">
                            {{ session('message') }}
                        </h1>
                    @else
                        <h1 class="font-bold text-gray-900 dark:text-white" style="text-align: center">
                            Подтвердите почту!
                        </h1>
                    @endif



                    <form class="space-y-4 md:space-y-6" action="{{ route('verification.send') }}" method="post">
                        @csrf
                        <button type="submit"
                            class="w-full text-white border-blue-400 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 border border-primary-600">
                            Повторно отправить ссылку
                        </button>


                    </form>
                    <form action="{{ route('user.logout') }}" method="post">
                        @csrf
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            <a href="{{ route('user.logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                style="margin-left: 170px"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500 text-blue-500">Выйти</a>
                        </p>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
