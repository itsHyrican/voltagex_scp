<?php
session_start();

// Überprüfe, ob der Benutzer authentifiziert ist
if (!isset($_SESSION['authenticated'])) {
    // Nicht authentifiziert, leite zur PIN-Eingabeseite um
    header('Location: /pages/scp_login.html');
    exit();
}

// Authentifiziert, zeige den Inhalt der Seite
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Patrick Scheffler" />
    <title>VolTageX - Clan</title>

    <link href="/dist/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png" />
    <link rel="manifest" href="assets/icons/site.webmanifest" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
</head>

<body class="bg-gray-200 dark:bg-dark-bg text-gray-900 dark:text-gray-200" style="font-family: Roboto">
    <header
        class="fixed top-0 left-0 w-full z-50 dark:border-b-[0.75px] dark:border-dark-bg2 py-2 bg-gray-100 dark:bg-dark-bg2 shadow-md border-b-[0.75px] border-gray-300 rounded-lg dark:rounded-lg dark:shadow-dark-border dark:shadow-md">
        <div class="container mx-auto flex justify-between items-center relative px-4 md:px-0">
            <!-- Linke Navigation (zwei Optionen) -->
            <nav class="hidden md:flex space-x-4">
                <div class="relative w-40 h-16 group">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-gray-200 dark:bg-dark-items transform -skew-x-12 group-hover:bg-light-items_hover dark:group-hover:bg-dark-hover transition-colors rounded-lg">
                    </div>
                    <a href="/index.html"
                        class="relative flex flex-col items-center justify-center text-gray-600 dark:text-gray-200 group-hover:text-gray-700 dark:group-hover:text-white transition-colors px-6 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        home
                    </a>
                </div>

                <div class="relative w-40 h-16 group">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-gray-200 dark:bg-dark-items transform -skew-x-12 group-hover:bg-light-items_hover dark:group-hover:bg-dark-hover transition-colors rounded-lg">
                    </div>
                    <a href="/pages/scp_login.html"
                        class="relative flex flex-col items-center justify-center text-gray-600 dark:text-gray-200 group-hover:text-gray-700 dark:group-hover:text-white transition-colors px-6 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Z" />
                        </svg>
                        scp
                    </a>
                </div>
            </nav>

            <!-- Logo in der Mitte -->
            <a href="/" class="flex items-center justify-center text-gray-800 dark:text-gray-200 mx-10">
                <img src="/assets/icons/main_logo.png" alt="Logo" class="h-16 md:h-20 lg:h-28 w-auto" />
            </a>

            <!-- Rechte Navigation (zwei Optionen) -->
            <nav class="hidden md:flex space-x-4">
                <div class="relative w-40 h-16 group">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-gray-200 dark:bg-dark-items transform skew-x-12 group-hover:bg-light-items_hover dark:group-hover:bg-dark-hover transition-colors rounded-lg">
                    </div>
                    <a href="/pages/contact.html"
                        class="relative flex flex-col items-center justify-center text-gray-600 dark:text-gray-200 group-hover:text-gray-700 dark:group-hover:text-white transition-colors px-6 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mb-0" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 1 0 1-.75 0 .375.375 0 1 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        contact
                    </a>
                </div>
                <div class="relative w-40 h-16 group">
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-gray-200 dark:bg-dark-items transform skew-x-12 group-hover:bg-light-items_hover dark:group-hover:bg-dark-hover transition-colors rounded-lg">
                    </div>
                    <a href="/otter_website/otterpin.html"
                        class="relative flex flex-col items-center justify-center text-gray-600 dark:text-gray-200 group-hover:text-gray-700 dark:group-hover:text-white transition-colors px-6 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mb-0" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                        otter
                    </a>
                </div>
            </nav>

            <!-- Burger Icon für mobile Ansicht -->
            <button id="burger-menu" class="text-gray-600 dark:text-gray-200 md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Mobiles Menü (Dropdown) ohne Icons -->
        <nav id="mobile-nav"
            class="hidden md:hidden absolute top-full left-0 w-full bg-gray-100 dark:bg-dark-bg py-4 space-y-2">
            <a href="/index.html"
                class="block text-center text-gray-600 dark:text-gray-200 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">home</a>
            <a href="/pages/scp_login.html"
                class="block text-center text-gray-600 dark:text-gray-200 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">scp</a>
            <a href="/pages/serverlist.html"
                class="block text-center text-gray-600 dark:text-gray-200 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">server
                list</a>
            <a href="/otter_website/otterpin.html"
                class="block text-center text-gray-600 dark:text-gray-200 py-2 hover:bg-gray-200 dark:hover:bg-gray-700">otter</a>
        </nav>
    </header>

    <style>
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 10px rgba(82, 80, 80, 0.8);
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
    </style>

    <div class="container mx-auto mt-4 pt-36 px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            <div class="mb-3">
                <div class="card h-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-dark-server">
                    <img class="w-full h-52 object-cover object-center" src="/assets/scp/asa_center.png"
                        alt="ASA The Center" />
                    <div class="card-body flex flex-col items-center p-3">
                        <h5 class="text-md font-bold">ASA: The Center</h5>
                        <p class="text-red-500 font-bold" data-server-id="ark-center">offline</p>
                        <div class="mt-2 flex justify-center space-x-5">
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="start" />
                                <input type="hidden" name="service" value="ark-center" />
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-5 rounded-lg hover:bg-green-700 transition-all">
                                    Starten
                                </button>
                            </form>
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="stop" />
                                <input type="hidden" name="service" value="ark-center" />
                                <button type="submit"
                                    class="bg-red-600 text-white py-2 px-5 rounded-lg hover:bg-red-700 transition-all">
                                    Stoppen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card h-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-dark-server">
                    <img class="w-full h-52 object-cover object-center" src="/assets/scp/asa.jpg"
                        alt="ASA The Island" />
                    <div class="card-body flex flex-col items-center p-3">
                        <h5 class="text-md font-bold">ASA: The Island</h5>
                        <p class="text-red-500 font-bold" data-server-id="ark-island">offline</p>
                        <div class="mt-2 flex justify-center space-x-5">
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="start" />
                                <input type="hidden" name="service" value="ark-island" />
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-5 rounded-lg hover:bg-green-700 transition-all">
                                    Starten
                                </button>
                            </form>
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="stop" />
                                <input type="hidden" name="service" value="ark-island" />
                                <button type="submit"
                                    class="bg-red-600 text-white py-2 px-5 rounded-lg hover:bg-red-700 transition-all">
                                    Stoppen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card h-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-dark-server">
                    <img class="w-full h-52 object-cover object-bottom" src="/assets/scp/asa_scorched.jpg"
                        alt="ASA Scorched Earth" />
                    <div class="card-body flex flex-col items-center p-3">
                        <h5 class="text-md font-bold">ASA: Scorched Earth</h5>
                        <p class="text-red-500 font-bold" data-server-id="ark-scorched">offline</p>
                        <div class="mt-2 flex justify-center space-x-5">
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="start" />
                                <input type="hidden" name="service" value="ark-scorched" />
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-5 rounded-lg hover:bg-green-700 transition-all">
                                    Starten
                                </button>
                            </form>
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="stop" />
                                <input type="hidden" name="service" value="ark-scorched" />
                                <button type="submit"
                                    class="bg-red-600 text-white py-2 px-5 rounded-lg hover:bg-red-700 transition-all">
                                    Stoppen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card h-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-dark-server">
                    <img class="w-full h-52 object-cover object-center" src="/assets/scp/asa_aberration.png"
                        alt="ASA Aberration" />
                    <div class="card-body flex flex-col items-center p-3">
                        <h5 class="text-md font-bold">ASA: Aberration</h5>
                        <p class="text-red-500 font-bold" data-server-id="ark-aberration">
                            offline
                        </p>
                        <div class="mt-2 flex justify-center space-x-5">
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="start" />
                                <input type="hidden" name="service" value="ark-aberration" />
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-5 rounded-lg hover:bg-green-700 transition-all">
                                    Starten
                                </button>
                            </form>
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="stop" />
                                <input type="hidden" name="service" value="ark-aberration" />
                                <button type="submit"
                                    class="bg-red-600 text-white py-2 px-5 rounded-lg hover:bg-red-700 transition-all">
                                    Stoppen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card h-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-dark-server">
                    <img class="w-full h-52 object-cover" src="/assets/scp/craftopia.jpg" alt="Craftopia" />
                    <div class="card-body flex flex-col items-center p-3">
                        <h5 class="text-md font-bold">Craftopia</h5>
                        <p class="text-red-500 font-bold" data-server-id="craftopia">offline</p>
                        <div class="mt-2 flex justify-center space-x-5">
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="start" />
                                <input type="hidden" name="service" value="craftopia" />
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-5 rounded-lg hover:bg-green-700 transition-all">
                                    Starten
                                </button>
                            </form>
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="stop" />
                                <input type="hidden" name="service" value="craftopia" />
                                <button type="submit"
                                    class="bg-red-600 text-white py-2 px-5 rounded-lg hover:bg-red-700 transition-all">
                                    Stoppen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card h-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-dark-server">
                    <img class="w-full h-52 object-cover object-top" src="/assets/scp/enshrouded.jpg"
                        alt="Enshrouded" />
                    <div class="card-body flex flex-col items-center p-3">
                        <h5 class="text-md font-bold">Enshrouded</h5>
                        <p class="text-red-500 font-bold" data-server-id="enshrouded">offline</p>
                        <div class="mt-2 flex justify-center space-x-5">
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="start" />
                                <input type="hidden" name="service" value="enshrouded" />
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-5 rounded-lg hover:bg-green-700 transition-all">
                                    Starten
                                </button>
                            </form>
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="stop" />
                                <input type="hidden" name="service" value="enshrouded" />
                                <button type="submit"
                                    class="bg-red-600 text-white py-2 px-5 rounded-lg hover:bg-red-700 transition-all">
                                    Stoppen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card h-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-dark-server">
                    <img class="w-full h-52 object-cover" src="/assets/scp/palworld.png" alt="PalWorld" />
                    <div class="card-body flex flex-col items-center p-3">
                        <h5 class="text-md font-bold">PalWorld</h5>
                        <p class="text-red-500 font-bold" data-server-id="palworld">offline</p>
                        <div class="mt-2 flex justify-center space-x-5">
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="start" />
                                <input type="hidden" name="service" value="palworld" />
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-5 rounded-lg hover:bg-green-700 transition-all">
                                    Starten
                                </button>
                            </form>
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="stop" />
                                <input type="hidden" name="service" value="palworld" />
                                <button type="submit"
                                    class="bg-red-600 text-white py-2 px-5 rounded-lg hover:bg-red-700 transition-all">
                                    Stoppen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card h-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-dark-server">
                    <img class="w-full h-52 object-cover" src="/assets/scp/valheim.jpg" alt="Valheim" />
                    <div class="card-body flex flex-col items-center p-3">
                        <h5 class="text-md font-bold">Valheim</h5>
                        <p class="text-red-500 font-bold" data-server-id="valheim">offline</p>
                        <div class="mt-2 flex justify-center space-x-5">
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="start" />
                                <input type="hidden" name="service" value="valheim" />
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-5 rounded-lg hover:bg-green-700 transition-all">
                                    Starten
                                </button>
                            </form>
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="stop" />
                                <input type="hidden" name="service" value="valheim" />
                                <button type="submit"
                                    class="bg-red-600 text-white py-2 px-5 rounded-lg hover:bg-red-700 transition-all">
                                    Stoppen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="card h-full bg-white shadow-md rounded-lg overflow-hidden dark:bg-dark-server">
                    <img class="w-full h-52 object-cover object-top" src="/assets/scp/satisfactory.jpg"
                        alt="Satisfactory" />
                    <div class="card-body flex flex-col items-center p-3">
                        <h5 class="text-md font-bold">Satisfactory</h5>
                        <p class="text-red-500 font-bold" data-server-id="satisfactory">offline</p>
                        <div class="mt-2 flex justify-center space-x-5">
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="start" />
                                <input type="hidden" name="service" value="satisfactory" />
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-5 rounded-lg hover:bg-green-700 transition-all">
                                    Starten
                                </button>
                            </form>
                            <form method="post" action="scp_script.php" class="server-action">
                                <input type="hidden" name="action" value="stop" />
                                <input type="hidden" name="service" value="satisfactory" />
                                <button type="submit"
                                    class="bg-red-600 text-white py-2 px-5 rounded-lg hover:bg-red-700 transition-all">
                                    Stoppen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="responseModal" class="fixed z-50 inset-0 hidden bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white dark:bg-dark-server rounded-lg shadow-lg max-w-md w-full mx-4 sm:mx-auto">
            <div class="modal-header flex justify-between items-center p-4">
                <h5 class="text-lg font-bold text-gray-900 dark:text-gray-200">Server</h5>
                <button id="closeModal" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="modal-body p-4 text-gray-900 dark:text-gray-200">
                <!-- Nachrichteninhalt wird hier eingefügt -->
            </div>
        </div>
    </div>

    <!-- Sticky Toggle Button -->
    <button id="theme-toggle"
        class="fixed bottom-5 right-5 z-50 p-3 bg-gray-700 text-white rounded-full shadow-lg hover:bg-gray-600 transition-all duration-300">
        <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white dark:hidden" fill="none"
            viewBox="0 0 48 48" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M 24.90625 3.96875 C 24.863281 3.976563 24.820313 3.988281 24.78125 4 C 24.316406 4.105469 23.988281 4.523438 24 5 L 24 11 C 23.996094 11.359375 24.183594 11.695313 24.496094 11.878906 C 24.808594 12.058594 25.191406 12.058594 25.503906 11.878906 C 25.816406 11.695313 26.003906 11.359375 26 11 L 26 5 C 26.011719 4.710938 25.894531 4.433594 25.6875 4.238281 C 25.476563 4.039063 25.191406 3.941406 24.90625 3.96875 Z M 10.65625 9.84375 C 10.28125 9.910156 9.980469 10.183594 9.875 10.546875 C 9.769531 10.914063 9.878906 11.304688 10.15625 11.5625 L 14.40625 15.8125 C 14.648438 16.109375 15.035156 16.246094 15.410156 16.160156 C 15.78125 16.074219 16.074219 15.78125 16.160156 15.410156 C 16.246094 15.035156 16.109375 14.648438 15.8125 14.40625 L 11.5625 10.15625 C 11.355469 9.933594 11.054688 9.820313 10.75 9.84375 C 10.71875 9.84375 10.6875 9.84375 10.65625 9.84375 Z M 39.03125 9.84375 C 38.804688 9.875 38.59375 9.988281 38.4375 10.15625 L 34.1875 14.40625 C 33.890625 14.648438 33.753906 15.035156 33.839844 15.410156 C 33.925781 15.78125 34.21875 16.074219 34.589844 16.160156 C 34.964844 16.246094 35.351563 16.109375 35.59375 15.8125 L 39.84375 11.5625 C 40.15625 11.265625 40.246094 10.800781 40.0625 10.410156 C 39.875 10.015625 39.460938 9.789063 39.03125 9.84375 Z M 24.90625 15 C 24.875 15.007813 24.84375 15.019531 24.8125 15.03125 C 24.75 15.035156 24.6875 15.046875 24.625 15.0625 C 24.613281 15.074219 24.605469 15.082031 24.59375 15.09375 C 19.289063 15.320313 15 19.640625 15 25 C 15 30.503906 19.496094 35 25 35 C 30.503906 35 35 30.503906 35 25 C 35 19.660156 30.746094 15.355469 25.46875 15.09375 C 25.433594 15.09375 25.410156 15.0625 25.375 15.0625 C 25.273438 15.023438 25.167969 15.003906 25.0625 15 C 25.042969 15 25.019531 15 25 15 C 24.96875 15 24.9375 15 24.90625 15 Z M 24.9375 17 C 24.957031 17 24.980469 17 25 17 C 25.03125 17 25.0625 17 25.09375 17 C 29.46875 17.050781 33 20.613281 33 25 C 33 29.421875 29.421875 33 25 33 C 20.582031 33 17 29.421875 17 25 C 17 20.601563 20.546875 17.035156 24.9375 17 Z M 4.71875 24 C 4.167969 24.078125 3.78125 24.589844 3.859375 25.140625 C 3.9375 25.691406 4.449219 26.078125 5 26 L 11 26 C 11.359375 26.003906 11.695313 25.816406 11.878906 25.503906 C 12.058594 25.191406 12.058594 24.808594 11.878906 24.496094 C 11.695313 24.183594 11.359375 23.996094 11 24 L 5 24 C 4.96875 24 4.9375 24 4.90625 24 C 4.875 24 4.84375 24 4.8125 24 C 4.78125 24 4.75 24 4.71875 24 Z M 38.71875 24 C 38.167969 24.078125 37.78125 24.589844 37.859375 25.140625 C 37.9375 25.691406 38.449219 26.078125 39 26 L 45 26 C 45.359375 26.003906 45.695313 25.816406 45.878906 25.503906 C 46.058594 25.191406 46.058594 24.808594 45.878906 24.496094 C 45.695313 24.183594 45.359375 23.996094 45 24 L 39 24 C 38.96875 24 38.9375 24 38.90625 24 C 38.875 24 38.84375 24 38.8125 24 C 38.78125 24 38.75 24 38.71875 24 Z M 15 33.875 C 14.773438 33.90625 14.5625 34.019531 14.40625 34.1875 L 10.15625 38.4375 C 9.859375 38.679688 9.722656 39.066406 9.808594 39.441406 C 9.894531 39.8125 10.1875 40.105469 10.558594 40.191406 C 10.933594 40.277344 11.320313 40.140625 11.5625 39.84375 L 15.8125 35.59375 C 16.109375 35.308594 16.199219 34.867188 16.039063 34.488281 C 15.882813 34.109375 15.503906 33.867188 15.09375 33.875 C 15.0625 33.875 15.03125 33.875 15 33.875 Z M 34.6875 33.875 C 34.3125 33.941406 34.011719 34.214844 33.90625 34.578125 C 33.800781 34.945313 33.910156 35.335938 34.1875 35.59375 L 38.4375 39.84375 C 38.679688 40.140625 39.066406 40.277344 39.441406 40.191406 C 39.8125 40.105469 40.105469 39.8125 40.191406 39.441406 C 40.277344 39.066406 40.140625 38.679688 39.84375 38.4375 L 35.59375 34.1875 C 35.40625 33.988281 35.148438 33.878906 34.875 33.875 C 34.84375 33.875 34.8125 33.875 34.78125 33.875 C 34.75 33.875 34.71875 33.875 34.6875 33.875 Z M 24.90625 37.96875 C 24.863281 37.976563 24.820313 37.988281 24.78125 38 C 24.316406 38.105469 23.988281 38.523438 24 39 L 24 45 C 23.996094 45.359375 24.183594 45.695313 24.496094 45.878906 C 24.808594 46.058594 25.191406 46.058594 25.503906 45.878906 C 25.816406 45.695313 26.003906 45.359375 26 45 L 26 39 C 26.011719 38.710938 25.894531 38.433594 25.6875 38.238281 C 25.476563 38.039063 25.191406 37.941406 24.90625 37.96875 Z" />
        </svg>
        <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6 text-gray-200 dark:inline"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1111.21 3 7.5 7.5 0 0021 12.79z" />
        </svg>
    </button>

    <!-- Footer -->
    <footer
        class="dark:border-t-[0.75px] dark:border-dark-hover border-t-[0.75px] border-gray-300 dark:bg-dark-bg mt-10 py-4">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <!-- Logo und Copyright -->
            <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-2">
                <img src="/assets/icons/main_logo.png" alt="Logo" class="h-10 w-auto" />
                <span class="text-gray-500 dark:text-gray-400">&copy; 2024 made by itsHyrican</span>
            </div>

            <!-- Social Links (Steam) -->
            <div class="flex space-x-4">
                <a href="https://steamcommunity.com/id/itshyrican/"
                    class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"
                        class="fill-black dark:fill-gray-400">
                        <path d="M17.5,27c-0.9,0-1.74,0.27-2.45,0.73l3.43,1.47c1.27,0.55,1.86,2.02,1.32,3.28C19.39,33.43,18.47,34,17.5,34 
                c-0.33,0-0.66-0.06-0.98-0.2l-3.44-1.47C13.47,34.41,15.3,36,17.5,36c2.48,0,4.5-2.02,4.5-4.5C22,29.02,19.98,27,17.5,27z 
                M30,13c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S32.76,13,30,13z M30,21c-1.66,0-3-1.34-3-3c0-1.66,1.34-3,3-3s3,1.34,3,3 
                C33,19.66,31.66,21,30,21z M24,4C13.28,4,4.54,12.42,4.03,23.01l8.95,3.83C14.15,25.7,15.74,25,17.5,25c0.16,0,0.33,0.01,0.49,0.02 
                l4.07-6.1C22.02,18.62,22,18.31,22,18c0-4.41,3.59-8,8-8s8,3.59,8,8c0,4.41-3.59,8-8,8c-0.14,0-0.28-0.01-0.42-0.02l-5.65,4.62 
                c0.04,0.3,0.07,0.59,0.07,0.9c0,3.58-2.92,6.5-6.5,6.5S11,35.08,11,31.5v-0.06l-6.44-2.76C6.66,37.47,14.56,44,24,44 
                c11.05,0,20-8.95,20-20S35.05,4,24,4z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    <script>
        // Burger Menu Toggle
        const burgerMenu = document.getElementById("burger-menu");
        const mobileNav = document.getElementById("mobile-nav");

        burgerMenu.addEventListener("click", () => {
            mobileNav.classList.toggle("hidden");
        });
    </script>

    <script>
        const toggleButton = document.getElementById("theme-toggle");
        const htmlElement = document.documentElement;

        // Überprüfe den gespeicherten Modus im localStorage
        if (localStorage.getItem("theme") === "dark") {
            htmlElement.classList.add("dark");
        }

        toggleButton.addEventListener("click", () => {
            htmlElement.classList.toggle("dark");

            // Speichere den aktuellen Modus im localStorage
            if (htmlElement.classList.contains("dark")) {
                localStorage.setItem("theme", "dark");
            } else {
                localStorage.setItem("theme", "light");
            }
        });
    </script>

    <script>
        function updateServerStatus() {
            fetch("/php/check_server_status.php")
                .then((response) => response.json())
                .then((data) => {
                    Object.entries(data).forEach(([serverId, status]) => {
                        const statusP = document.querySelector(
                            `[data-server-id="${serverId}"]`
                        );
                        if (statusP) {
                            if (status === "online") {
                                statusP.classList.remove("text-red-500");
                                statusP.classList.add("text-green-500");
                                statusP.textContent = "online";
                                statusP.style.color = "green"; // Direkte Änderung der Farbe
                            } else {
                                statusP.classList.remove("text-green-500");
                                statusP.classList.add("text-red-500");
                                statusP.textContent = "offline";
                                statusP.style.color = "red"; // Direkte Änderung der Farbe
                            }
                        }
                    });
                })
                .catch((error) => console.error("Error:", error));
        }

        document.addEventListener("DOMContentLoaded", () => {
            updateServerStatus();
            setInterval(updateServerStatus, 10000);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const forms = document.querySelectorAll("form.server-action");
            forms.forEach((form) => {
                form.addEventListener("submit", function (event) {
                    event.preventDefault(); // Verhindert das Neuladen der Seite
                    const formData = new FormData(this); // Sammelt die Daten des Formulars

                    // Sendet die Anfrage an scp_script.php
                    fetch("scp_script.php", {
                        method: "POST",
                        body: formData,
                    })
                        .then((response) => response.text()) // Konvertiert die Antwort in Text
                        .then((text) => {
                            // Zeigt ein TailwindCSS Modal mit der Antwort
                            showModal(text);
                        })
                        .catch((error) => console.error("Fehler:", error));
                });
            });
        });

        function showModal(message) {
            // Erstelle das Modal im DOM, falls es noch nicht existiert
            let modal = document.getElementById('responseModal');
            if (!modal) {
                modal = document.createElement('div');
                modal.id = 'responseModal';
                modal.className = 'fixed z-50 inset-0 flex items-center justify-center bg-black bg-opacity-50';
                modal.innerHTML = `
              <div class="bg-white dark:bg-gray-800 p-6 rounded shadow-lg max-w-md mx-auto">
                <div class="modal-body text-gray-900 dark:text-gray-200 mb-4"></div>
                <button id="closeModal" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded transition-all">
                  Schließen
                </button>
              </div>
            `;
                document.body.appendChild(modal);
            }

            // Füge die Nachricht in den Body des Modals ein
            const modalBody = modal.querySelector('.modal-body');
            modalBody.textContent = message;

            // Zeigt das Modal an
            modal.classList.remove('hidden');

            // Schließen des Modals
            document.getElementById('closeModal').addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        }
    </script>

</body>
</html>