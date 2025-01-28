@extends('layouts.user-main')
@section('content')
    <div class="flex h-screen relative">
        <!-- Sidebar -->
        <div id="sidebar" class="w-64 font-medium text-sm space-y-6 fixed sm:relative z-20 h-full transform -translate-x-full sm:translate-x-0 transition-transform duration-300  dark:bg-gray-800">

            <nav class="space-y-2 mx-2 flex justify-between flex-col h-screen py-4">
                <div>
                    <div class="p-6">
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Reader <span class="text-indigo-600">pro</span></h1>
                    </div>
                    <a href="#" class="w-full px-2 rounded-lg text-center py-2 bg-blue-800 flex justify-center text-gray-50 hover:bg-blue-700 dark:text-gray-50 dark:hover:bg-blue-700">
          <span class="flex items-center justify-between w-2/3">
			Create order
          <i class="fas flex-end fa-add  shadow-lg placeholder-gray-500 bg-gray-500 p-2 rounded-lg mr-3"></i>
		</span>

                    </a>
                    <!-- Add more navigation links -->
                    <div class="mt-7 py-3 border-b">
                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
			<span>
			<i class="fas fa-wallet mr-3"></i>
Balance
</span>
                                <span class="text-gray-500">$0.00</span>
                            </div>
                        </a>

                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
			<span>
			<i class="fas fa-user mr-3"></i>
cris</span>

                                <span class="text-gray-500"><i class="fa-solid fa-chevron-right"></i>

                            </div>
                        </a>
                    </div>

                    <div class="mt-3 py-3 border-b">

                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
				<span>
					<i class="fas fa-folder mr-3"></i>
					All orders
				</span>
                            </div>
                        </a>

                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
					<span>
						<i class="fa-solid fa-user-plus mr-3"></i>
						My Writers
					</span>
                            </div>
                        </a>
                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
						<span>
							<i class="fa-solid fa-users mr-3"></i>
														All writers
						</span>
                            </div>
                        </a>
                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
							<span>
								<i class="fa-brands fa-rocketchat mr-3"></i>								conversations
							</span>
                            </div>
                        </a>
                    </div>

                    <div class=" py-3 ">
                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
									<span>
										<i class="fa-solid fa-clock-rotate-left mr-3"></i>history
									</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="mt-7 py-3 border-b">
                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
				<span>
					<i class="fa-solid fa-qrcode mr-3"></i>Download app
				</span>
                            </div>
                        </a>

                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
					<span>
						<i class="fa-solid fa-headset mr-3"></i>Help Desk
					</span>
                            </div>
                        </a>


                        <a href="#" class="block px-6 py-2  text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-700">
                            <div class="flex items-center justify-between">
					<span>
						<i class="fa-regular fa-moon mr-3"></i>		Theme:light</span>

                                <span class="text-gray-500"><i class="fa-solid fa-chevron-right"></i>

                            </div>
                        </a>

                    </div>

                </div>

            </nav>
        </div>

        <!-- Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden sm:hidden"></div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white dark:bg-gray-800 border-b p-4 flex justify-between items-center">
                <button id="menu-button" class="sm:hidden text-gray-700 dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="text-lg font-bold">
                    <input type="search"
                           class="w-full h-10 pl-10 text-sm text-gray-700 placeholder-gray-500 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:border-gray-600"
                           placeholder="Search...">
                </div>
                <div class="text-lg font-bold flex items-center space-x-4">
                    <div>
                        <select class=" text-gray-500 border rounded-lg px-3 py-2 focus:outline-none">
                            <option value="en" class="flex items-center space-x-2">
                                <img src="https://flagcdn.com/w40/us.png" alt="US Flag" class="inline w-5 h-5 mr-2"> English
                            </option>
                            <option value="es" class="flex items-center space-x-2">
                                <img src="https://flagcdn.com/w40/es.png" alt="Spanish Flag" class="inline w-5 h-5 mr-2"> Español
                            </option>
                            <option value="fr" class="flex items-center space-x-2">
                                <img src="https://flagcdn.com/w40/fr.png" alt="French Flag" class="inline w-5 h-5 mr-2"> Français
                            </option>
                        </select>
                    </div>
                    <i class="fas fa-bell text-xl"></i>
                    <div class="text-lg font-bold rounded-full bg-black text-white w-8 h-8 text-center">
                        cm
                    </div>
                </div>
            </header>

            <div class="flex-1 container p-6">
                <div class="flex container px-7 p-4 items-center justify-between">
                    <h1 class="text-2xl font-bold mb-6">My Orders</h1>
                    <a href="#" class=" px-9 rounded-lg text-center py-2 bg-blue-800 flex justify-center text-gray-50 hover:bg-blue-700 dark:text-gray-50 dark:hover:bg-blue-700">
                        Create order


                    </a>
                </div>
                <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                  <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
                    <h2 class="text-lg font-medium mb-2">Wallet Balance</h2>
                    <p class="text-3xl font-bold">$1,234,694.00</p>
                  </div>
                  <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
                    <h2 class="text-lg font-medium mb-2">mk</h2>
                    <p class="text-3xl font-bold">10,562</p>
                  </div>
                  <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
                    <h2 class="text-lg font-medium mb-2">Guardians</h2>
                    <p class="text-3xl font-bold">8,522</p>
                  </div>
                  <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
                    <h2 class="text-lg font-medium mb-2">Teachers</h2>
                    <p class="text-3xl font-bold">580</p>
                  </div>
                  <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
                    <h2 class="text-lg font-medium mb-2">Advance Applications</h2>
                    <p class="text-3xl font-bold">240</p>
                  </div>
                  <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
                    <h2 class="text-lg font-medium mb-2">Pending Substrands</h2>
                    <p class="text-3xl font-bold">5%</p>
                  </div>
                  <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
                    <h2 class="text-lg font-medium mb-2">Pending Notes</h2>
                    <p class="text-3xl font-bold">5%</p>
                  </div>
                  <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
                    <h2 class="text-lg font-medium mb-2">Pending Questions</h2>
                    <p class="text-3xl font-bold">5%</p>
                  </div>
                </div> -->
                <div class="flex items-center justify-between border-b  pb-2 mb-6">
                    <div class="flex space-x-6">
                        <button class="text-blue-700 font-semibold border-b-2 border-blue-500 pb-1">Active</button>
                        <button class="text-gray-600 hover:text-white">Drafts</button>
                        <button class="text-gray-600 hover:text-white">Closed</button>
                    </div>
                    <div class="flex items-center space-x-4">
                        <select class="border text-gray-600 rounded-lg px-3 py-2 ">
                            <option>Sort by: Date, DESC</option>
                            <option>Sort by: Date, ASC</option>
                            <option>Sort by: Name</option>
                        </select>
                        <input
                            type="text"
                            placeholder="Search"
                            class="border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500"
                        />
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center h-64 border  rounded-lg">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v5h6v-5m-2 0v-6m-8 8V7a2 2 0 012-2h6a2 2 0 012 2v10m6 8V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14" />
                        </svg>
                    </div>
                    <p class="text-gray-700 mb-4">You have no Active Orders</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                        New order
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
