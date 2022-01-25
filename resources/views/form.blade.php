<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Form</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="flex items-center h-screen max-w-md mx-auto bg-teal-lighter">
        <div class="w-full bg-white rounded shadow-lg p-8 m-4">
            <h1 class="block w-full text-center text-grey-darkest mb-6">Sign Up</h1>
            <form class="mb-4" action="/" method="post">
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="first_name">First Name</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="first_name" id="first_name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="last_name">Last Name</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="last_name" id="last_name">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="email">Email</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="email" name="email" id="email">
                </div>
                <div class="flex flex-col mb-6">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="password">Password</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="password" name="password" id="password">
                </div>
                <button class="block hover:bg-red-700 uppercase text-lg mx-auto p-2 rounded" type="submit">Create
                    Account</button>
            </form>
            <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker"
                href="/login">Already have an account?</a>
        </div>
    </div>

</body>

</html>
