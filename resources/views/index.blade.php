<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indonesian Food</title>
    
    @vite('resources/css/app.css')
    <style>
        /* Overlay Styles */
        #overlay {
            position: fixed;
            top: 20%;
            left: 20%;
            width: 60%;
            height: 60%;
            background: rgba(255, 255, 255,0.9);
            background: size 60px;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 50;
        }
        #overlay img {
            max-width: 215% !important;
            max-height: 215% !important;
            border-radius: 20px !important;
            margin-left:10%;
        }
        #overlay .description {
            margin-top: 20px;
            margin-left:10px;
            color: #1B1833;
            text-align: center;
            font-size: 1.5rem;
        }
        #overlay .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 2rem;
            color: #1B1833;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <!-- Navigation -->
    <nav class="bg-gray-800 fixed w-full z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="#" class="text-xl font-bold">
                INDONESIAN<span class="text-yellow-500">FOOD</span>
            </a>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#makanan" class="hover:text-yellow-500 transition-colors">Makanan</a>
                <a href="#kuliner" class="hover:text-yellow-500 transition-colors">Kuliner</a>
                <a href="#About" class="hover:text-yellow-500 transition-colors">About us</a>
                <span id="date-display" class="text-gray-300"></span>
            </div>
            <!-- Search Bar -->
            <form class="hidden md:flex items-center space-x-2">
                <input
                    type="text"
                    placeholder="Search..."
                    class="bg-gray-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring focus:ring-yellow-500"
                />
                <button
                    type="submit"
                    class="bg-yellow-500 text-black px-4 py-2 rounded-md hover:bg-yellow-600 transition-colors"
                >
                    Search
                </button>
            </form>
            <div class="flex items-center">
                <a href="{{ route('login') }}" id="sign-up-link" class="bg-yellow-500 text-black px-4 py-2 rounded-md hover:bg-yellow-600 transition-colors">
                    Sign in
                </a>
    </a>
</div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen flex items-center justify-center bg-[url('/path-to-your-hero-image.jpg')] bg-cover bg-center">
        <div class="text-center">
            <h1 class="text-6xl font-bold">
                Indonesia <span class="text-yellow-500">Food</span>
            </h1>
        </div>
    </section>

    <!-- Makanan Section -->
    <section id="makanan" class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold text-center mb-4">
                Makanan <span class="text-yellow-500">Khas Indonesia</span>
            </h1>
            <p class="text-gray-300 text-center mb-12 max-w-4xl mx-auto">
                Hidangan Indonesia merupakan salah satu tradisi kuliner yang paling beragam dan kaya di dunia, memadukan cita rasa kuat dari berbagai rempah-rempah yang mencerminkan kekayaan budaya Nusantara.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/e2c517295da17c709cc0613acfdf8a91 (1).jpg" alt="Nasi Padang" class="w-full h-64 object-cover clickable-image" data-description="Nasi Padang adalah hidangan khas Minangkabau yang terkenal dengan kelezatan rempah-rempahnya.">
                    <h3 class="text-xl font-semibold p-4 text-center">Nasi Padang</h3>
                </div>
                <div class="bg-gray-800 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/8999d51e537b9648a299784a3855da8d (1).jpg" alt="Bakso" class="w-full h-64 object-cover">
                    <h3 class="text-xl font-semibold p-4 text-center">Bakso</h3>
                </div>
                <div class="bg-gray-800 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/46773c91fd3592367e0c6168f536b512.jpg" alt="Rendang" class="w-full h-64 object-cover">
                    <h3 class="text-xl font-semibold p-4 text-center">Rendang</h3>
                </div>
                <div class="bg-gray-800 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/deac859215deab89afb758d551403ac9.jpg" alt="Gudeg" class="w-full h-64 object-cover">
                    <h3 class="text-xl font-semibold p-4 text-center">Gudeg</h3>
                </div>
                <div class="bg-gray-800 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/6d17f31e83c5830bdbc5adcbbc12751e (1).jpg" alt="Lontong Opor" class="w-full h-64 object-cover">
                    <h3 class="text-xl font-semibold p-4 text-center">Lontong Opor</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Kuliner Section -->
    <section id="kuliner" class="py-20 px-4 bg-gray-800">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold text-center mb-4">
                Kuliner <span class="text-yellow-500">Indonesia</span>
            </h1>
            <p class="text-gray-300 text-center mb-12 max-w-4xl mx-auto">
                Jajanan Indonesia, atau camilan khas yang banyak ditemui di berbagai daerah di Nusantara, merupakan cerminan dari keanekaragaman kuliner Indonesia yang kaya dan penuh rasa.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-900 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/d1b5463abcd5aafc4547e3a95f583b63.jpg" alt="Martabak Manis" class="w-full h-64 object-cover">
                    <h3 class="text-xl font-semibold p-4 text-center">Martabak Manis</h3>
                </div>
                <div class="bg-gray-900 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/0d4f65440725097caadec1a6542c2877 (1).jpg" alt="Klepon" class="w-full h-64 object-cover">
                    <h3 class="text-xl font-semibold p-4 text-center">Klepon</h3>
                </div>
                <div class="bg-gray-900 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/1ab9506d16d50e5eb2b032bea25cd3fb (1).jpg" alt="Onde-Onde" class="w-full h-64 object-cover">
                    <h3 class="text-xl font-semibold p-4 text-center">Onde-Onde</h3>
                </div>
                <div class="bg-gray-900 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/7b3843189cd74d320a547ae0a26f62ac (1).jpg" alt="Es Cendol" class="w-full h-64 object-cover">
                    <h3 class="text-xl font-semibold p-4 text-center">Es Cendol</h3>
                </div>
                <div class="bg-gray-900 rounded-lg overflow-hidden transition-transform hover:scale-105">
                    <img src="/Assets/img/cc25236a216e164e3e0bc953af7f7baf.jpg" alt="Pisang Hoheng" class="w-full h-64 object-cover">
                    <h3 class="text-xl font-semibold p-4 text-center">Pisang Hoheng</h3>
                </div>
            </div>
        </div>
    </section>
    
    <div id="overlay">
    <span class="close-btn">&times;</span>
    <img src="" alt="Overlay Image" id="overlay-image">
    <p class="description" id="overlay-description"></p>
</div>

    <!-- About Section -->
    <section id="About" class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl font-bold text-center mb-4">
                About <span class="text-yellow-500">Us</span>
            </h1>
            <p class="text-gray-300 text-center mb-12 max-w-4xl mx-auto">
                Website ini lahir dari kecintaan kami pada kuliner Indonesia yang kaya akan cita rasa dan sejarah.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <img src="/Assets/img/download (12).png" alt="Farezki Maulana Putra" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Farezki Maulana Putra</h3>
                    <p class="text-gray-400">XI PPLG 2</p>
                    <p class="text-gray-400">10</p>
                </div>
                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <img src="/Assets/img/download (12).png" alt="Muhammad Ardiansyah" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Muhammad Yusuf Ardiansyah</h3>
                    <p class="text-gray-400">XI PPLG 2</p>
                    <p class="text-gray-400">21</p>
                </div>
                <div class="bg-gray-800 rounded-lg p-6 text-center">
                    <img src="/Assets/img/download (12).png" alt="Nafi Kusuma Abqory" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-semibold">Nafi Kusuma Abqory</h3>
                    <p class="text-gray-400">XI PPLG 2</p>
                    <p class="text-gray-400">22</p>
                </div>
            </div>
            <p class="text-center text-gray-400">
                Ingin tahu lebih banyak? Ikuti kami di Instagram @KulinerIndonesiaWorld, atau kirimkan email kepada kami di hello@kulinerindonesia.com
            </p>
        </div>
    </section>

    <script>
        // Display current date
        const dateDisplay = document.getElementById('date-display');
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        dateDisplay.textContent = new Date().toLocaleDateString('id-ID', options);
    </script>
</body>
<script src="/Assets/js/overlay.js"></script>
</html>