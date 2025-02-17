<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WorkByte - Pemrograman Web dengan React</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    @vite('resources/css/app.css')


</head>
<body class="font-poppins bg-gray-100 min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white bg-opacity-90 backdrop-filter backdrop-blur-lg fixed w-full z-10">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-bold text-workbyte-600">
                    Work<span class="text-workbyte-400">Byte</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="/learn" class="text-workbyte-600 hover:text-workbyte-800 transition duration-300">Belajar</a>
                    <a href="/challenge" class="text-workbyte-600 hover:text-workbyte-800 transition duration-300">Tantangan</a>
                    <a href="/jobs" class="text-workbyte-600 hover:text-workbyte-800 transition duration-300">Cari Kerja</a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    @auth
                        <div class="relative">
                            <button class="flex items-center text-workbyte-600 hover:text-workbyte-800 focus:outline-none">
                                <span>{{ Auth::user()->name }}</span>
                                <i data-feather="chevron-down" class="ml-2"></i>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 hidden">
                                <a href="/profile" class="block px-4 py-2 text-sm text-workbyte-600 hover:bg-workbyte-100">Profile</a>
                                <form action="{{ route('logout') }}" method="POST" class="mt-2">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-red-100">Logout</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="bg-workbyte-100 text-workbyte-600 px-6 py-2 rounded hover:bg-workbyte-200 transition duration-300">Login</a>
                        <a href="{{ route('register') }}" class="bg-workbyte-600 text-white px-6 py-2 rounded hover:bg-workbyte-700 transition duration-300">Daftar</a>
                    @endauth
                </div>
                <div class="md:hidden">
                    <button class="text-workbyte-600 hover:text-workbyte-800 focus:outline-none" onclick="toggleMobileMenu()">
                        <i data-feather="menu"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white" id="mobileMenu">
            <div class="px-6 py-4">
                <a href="/learn" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Belajar</a>
                <a href="/challenge" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Tantangan</a>
                <a href="/jobs" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Cari Kerja</a>
                @auth
                    <a href="/profile" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Profile</a>
                    <form action="{{ route('logout') }}" method="POST" class="mt-2">
                        @csrf
                        <button type="submit" class="block w-full text-left text-red-500 hover:text-red-700 py-2">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Login</a>
                    <a href="{{ route('register') }}" class="block text-workbyte-600 hover:text-workbyte-800 py-2">Daftar</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-4">
                <h2 class="text-lg font-semibold text-workbyte-800 mb-4">Kurikulum Kursus</h2>
                <div class="space-y-2">
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">1. Pengenalan React</span>
                            <i data-feather="chevron-down" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                        <div class="ml-4 mt-2 space-y-1">
                            <a href="#" class="block p-2 rounded text-workbyte-600 hover:bg-workbyte-100">1.1 Apa itu React?</a>
                            <a href="#" class="block p-2 rounded text-workbyte-600 hover:bg-workbyte-100">1.2 Setting up environment</a>
                            <a href="#" class="block p-2 rounded bg-workbyte-200 text-workbyte-800">1.3 Membuat aplikasi pertama</a>
                        </div>
                    </div>
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">2. Komponen dan Props</span>
                            <i data-feather="chevron-right" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                    </div>
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">3. State dan Lifecycle</span>
                            <i data-feather="chevron-right" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                    </div>
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">4. Handling Events</span>
                            <i data-feather="chevron-right" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                    </div>
                    <div>
                        <button class="flex items-center justify-between w-full text-left p-2 rounded hover:bg-workbyte-100">
                            <span class="text-workbyte-700">5. Hooks dan Function Components</span>
                            <i data-feather="chevron-right" class="w-4 h-4 text-workbyte-600"></i>
                        </button>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Course Content -->
        <main class="flex-grow p-6">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl font-bold text-workbyte-800 mb-4">1.3 Membuat Aplikasi React Pertama</h1>
                
                <!-- Video Player -->
                <div class="bg-black aspect-video mb-6 flex items-center justify-center">
                    <button class="text-white bg-workbyte-600 hover:bg-workbyte-700 transition duration-300 rounded-full p-4">
                        <i data-feather="play" class="w-8 h-8"></i>
                    </button>
                </div>

                <!-- Course Progress -->
                <div class="bg-white p-4 rounded-lg shadow mb-6">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-workbyte-700 font-semibold">Progress Kursus</span>
                        <span class="text-workbyte-600">15% Selesai</span>
                    </div>
                    <div class="w-full bg-workbyte-100 rounded-full h-2.5">
                        <div class="bg-workbyte-600 h-2.5 rounded-full" style="width: 15%"></div>
                    </div>
                </div>

                <!-- Lesson Content -->
                <div class="bg-white p-6 rounded-lg shadow mb-6">
                    <h2 class="text-2xl font-semibold text-workbyte-800 mb-4">Membuat Aplikasi React Pertama</h2>
                    <p class="text-gray-700 mb-4">
                        Dalam pelajaran ini, kita akan membuat aplikasi React pertama kita. Kita akan menggunakan Create React App untuk menyiapkan lingkungan pengembangan dengan cepat dan mudah.
                    </p>
                    <h3 class="text-xl font-semibold text-workbyte-700 mb-2">Langkah-langkah:</h3>
                    <ol class="list-decimal list-inside space-y-2 text-gray-700 mb-4">
                        <li>Buka terminal atau command prompt</li>
                        <li>Jalankan perintah: <code class="bg-gray-100 px-2 py-1 rounded">npx create-react-app my-first-app</code></li>
                        <li>Tunggu proses instalasi selesai</li>
                        <li>Masuk ke direktori proyek: <code class="bg-gray-100 px-2 py-1 rounded">cd my-first-app</code></li>
                        <li>Jalankan aplikasi: <code class="bg-gray-100 px-2 py-1 rounded">npm start</code></li>
                    </ol>
                    <p class="text-gray-700 mb-4">
                        Setelah menjalankan langkah-langkah di atas, Anda akan melihat aplikasi React default berjalan di browser Anda pada <code class="bg-gray-100 px-2 py-1 rounded">http://localhost:3000</code>.
                    </p>
                    <div class="bg-workbyte-100 border-l-4 border-workbyte-600 p-4 mb-4">
                        <p class="text-workbyte-800 font-semibold">Catatan Penting:</p>
                        <p class="text-workbyte-700">Pastikan Anda telah menginstal Node.js dan npm di komputer Anda sebelum menjalankan perintah di atas.</p>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between items-center">
                    <a href="#" class="bg-workbyte-100 text-workbyte-600 px-6 py-2 rounded hover:bg-workbyte-200 transition duration-300 flex items-center">
                        <i data-feather="arrow-left" class="mr-2"></i>
                        Sebelumnya
                    </a>
                    <a href="#" class="bg-workbyte-600 text-white px-6 py-2 rounded hover:bg-workbyte-700 transition duration-300 flex items-center">
                        Selanjutnya
                        <i data-feather="arrow-right" class="ml-2"></i>
                    </a>
                </div>
            </div>
        </main>
    </div>

<!-- Chat Button -->
<div id="chatButton" class="fixed bottom-6 right-6 z-50">
    <button onclick="toggleChat()" class="w-14 h-14 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
    </button>
</div>

<!-- Chat Window -->
<div id="chatWindow" class="fixed bottom-24 right-6 w-80 md:w-96 bg-white rounded-lg shadow-2xl z-50 transition-all duration-500 ease-in-out transform translate-y-full opacity-0 scale-95">
    <div class="p-4 bg-gradient-to-r from-blue-600 to-blue-800 text-white font-semibold rounded-t-lg flex justify-between items-center">
        <span class="text-lg">WorkBot</span>
        <button onclick="toggleChat()" class="text-white hover:text-gray-200 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div id="chatMessages" class="p-4 h-80 overflow-y-auto text-sm text-gray-800 space-y-4"></div>
    <div class="p-4 border-t border-gray-200">
        <form onsubmit="sendMessage(event)" class="flex space-x-2">
            <input type="text" id="chatInput" placeholder="Type your message..." class="flex-grow p-2 border border-gray-300 rounded-l-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-r-md hover:bg-blue-700 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </form>
    </div>
</div>

    <!-- Footer -->
    <footer class="bg-workbyte-900 text-white py-6">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap justify-between items-center">
                <div class="w-full md:w-1/3 text-center md:text-left mb-4 md:mb-0">
                    <h3 class="text-2xl font-bold">Work<span class="text-workbyte-400">Byte</span></h3>
                </div>
                <div class="w-full md:w-1/3 text-center mb-4 md:mb-0">
                    <p>&copy; 2023 WorkByte. Hak Cipta Dilindungi.</p>
                </div>
                <div class="w-full md:w-1/3 text-center md:text-right">
                    <div class="flex justify-center md:justify-end space-x-4">
                        <a href="#" class="text-workbyte-300 hover:text-white transition duration-300">
                            <i data-feather="facebook"></i>
                        </a>
                        <a href="#" class="text-workbyte-300 hover:text-white transition duration-300">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="#" class="text-workbyte-300 hover:text-white transition duration-300">
                            <i data-feather="instagram"></i>
                        </a>
                        <a href="#" class="text-workbyte-300 hover:text-white transition duration-300">
                            <i data-feather="linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
         function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('hidden');
    }

    // Feather Icons
    feather.replace();

    // Dropdown Menu
    const dropdownButton = document.querySelector('.relative button');
    const dropdownMenu = document.querySelector('.relative .hidden');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
        feather.replace();

        // Simple toggle for curriculum sections
        document.querySelectorAll('aside button').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                content.classList.toggle('hidden');
                const icon = button.querySelector('i');
                icon.setAttribute('data-feather', content.classList.contains('hidden') ? 'chevron-right' : 'chevron-down');
                feather.replace();
            });
        });


    function toggleChat() {
        const chatWindow = document.getElementById('chatWindow');
        chatWindow.classList.toggle('translate-y-full');
        chatWindow.classList.toggle('opacity-0');
        chatWindow.classList.toggle('scale-95');
    }

    async function sendMessage(event) {
    event.preventDefault();
    const chatInput = document.getElementById('chatInput');
    const chatMessages = document.getElementById('chatMessages');
    const message = chatInput.value.trim();

    if (message === '') return;

    // Display user message
    appendMessage('You', message, 'user');
    chatInput.value = '';

    // Display loading animation
    const loadingElement = appendMessage('WorkBot', '<span class="animate-pulse">Thinking...</span>', 'bot');

    // Define default context
    const defaultContext = 'You are WorkBot, an AI assistant designed to help with tasks related to work. Always provide clear and concise answers based on the task at hand.';

    // Send message to server
    try {
        const response = await fetch('{{ route('chatbot.send') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                prompt: message,
                context: defaultContext, // Add the default context here
            }),
        });

        const data = await response.json();

        // Remove loading animation and display reply
        loadingElement.remove();
        appendMessage('WorkBot', data.reply, 'bot');
    } catch (error) {
        console.error('Error:', error);
        loadingElement.remove();
        appendMessage('Error', 'An error occurred while sending the message.', 'error');
    }
}

function appendMessage(sender, content, type) {
    const chatMessages = document.getElementById('chatMessages');
    const messageElement = document.createElement('div');
    messageElement.className = `p-2 rounded-lg ${type === 'user' ? 'bg-blue-100 ml-auto' : type === 'error' ? 'bg-red-100' : 'bg-gray-100'} max-w-[80%]`;
    messageElement.innerHTML = `
        <p class="font-semibold ${type === 'user' ? 'text-blue-800' : type === 'error' ? 'text-red-800' : 'text-gray-800'}">${sender}</p>
        <p class="${type === 'user' ? 'text-blue-600' : type === 'error' ? 'text-red-600' : 'text-gray-600'}">${content}</p>
    `;
    chatMessages.appendChild(messageElement);
    chatMessages.scrollTop = chatMessages.scrollHeight;
    return messageElement;
}

    </script>

    
</body>
</html>

