<!DOCTYPE html>
<html lang="id" x-data="ppdbForm()">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB 2025/2026 - SKB DINAS PENDIDIKAN KOTA PALEMBANG</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1d4ed8',
                        accent: '#f59e0b',
                        success: '#10b981',
                        darkblue: '#1e3a8a',
                        lightblue: '#93c5fd',
                    }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        [x-cloak] { display: none !important; }
        .form-section {
            transition: all 0.3s ease;
        }
        .gradient-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
        }
        .card-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .input-focus {
            transition: all 0.3s;
        }
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.3);
            border-color: #2563eb;
        }
        .radio-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100">
<div class="min-h-screen flex flex-col">
    <!-- Header -->
    <header class="gradient-header text-white shadow-lg">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="bg-white rounded-xl p-3 mr-4 shadow-lg transform rotate-6">
                        <div class="w-14 h-14 bg-blue-100 flex items-center justify-center rounded-lg">
                            <img src="https://dinaspendidikankotapalembang.com/image/logo.png" alt="Logo" class="w-full h-full object-contain">
                        </div>
                    </div>
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold tracking-tight">SKB DINAS PENDIDIKAN KOTA PALEMBANG</h1>
                        <p class="text-blue-100 text-sm md:text-base mt-1">Penerimaan Peserta Didik Baru Tahun 2025/2026</p>
                    </div>
                </div>
                <div class="bg-white text-primary px-6 py-3 rounded-xl shadow-lg transform -rotate-1 hover:rotate-0 transition">
                    <p class="font-bold text-sm md:text-base">Formulir Pendaftaran Online</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Progress Indicator -->
    <div class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex flex-col items-center relative">
                    <div class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center relative z-10 transform hover:scale-110 transition" 
                         x-bind:class="{'bg-accent': currentStep > 1}">
                        <span x-show="currentStep === 1" class="font-bold">1</span>
                        <i x-show="currentStep > 1" class="fas fa-check text-sm"></i>
                    </div>
                    <span class="text-xs mt-2 font-medium" 
                          x-bind:class="{'text-primary font-bold': currentStep === 1, 'text-gray-500': currentStep !== 1}">Data Diri & Pendidikan</span>
                </div>
                <div class="flex-1 h-1 mx-2 bg-gray-200 relative">
                    <div class="absolute top-0 left-0 h-full bg-gradient-to-r from-primary to-accent transition-all duration-500 ease-in-out" 
                         x-bind:style="'width: ' + (currentStep >= 2 ? '100%' : '0%')"></div>
                </div>
                <div class="flex flex-col items-center relative">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center relative z-10 transform hover:scale-110 transition" 
                         x-bind:class="{'bg-primary text-white': currentStep === 2, 'bg-gray-200 text-gray-600': currentStep < 2, 'bg-accent text-white': currentStep > 2}">
                        <span x-show="currentStep <= 2" class="font-bold">2</span>
                        <i x-show="currentStep > 2" class="fas fa-check text-sm"></i>
                    </div>
                    <span class="text-xs mt-2 font-medium" 
                          x-bind:class="{'text-primary font-bold': currentStep === 2, 'text-gray-500': currentStep !== 2}">Data Orang Tua</span>
                </div>
                <div class="flex-1 h-1 mx-2 bg-gray-200 relative">
                    <div class="absolute top-0 left-0 h-full bg-gradient-to-r from-primary to-accent transition-all duration-500 ease-in-out" 
                         x-bind:style="'width: ' + (currentStep >= 3 ? '100%' : '0%')"></div>
                </div>
                <div class="flex flex-col items-center relative">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center relative z-10 transform hover:scale-110 transition" 
                         x-bind:class="{'bg-primary text-white': currentStep === 3, 'bg-gray-200 text-gray-600': currentStep < 3}">
                        <span class="font-bold">3</span>
                    </div>
                    <span class="text-xs mt-2 font-medium" 
                          x-bind:class="{'text-primary font-bold': currentStep === 3, 'text-gray-500': currentStep !== 3}">Pilihan Jurusan</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto bg-white rounded-2xl card-shadow overflow-hidden">
            <!-- Form Header -->
            <div class="gradient-header px-8 py-6">
                <h2 class="text-2xl font-bold text-white">Formulir Pendaftaran PPDB</h2>
                <p class="text-blue-100 text-sm md:text-base">Isi data dengan lengkap dan benar</p>
            </div>

            <!-- Form Content -->
            <form class="px-8 py-6" @submit.prevent="submitForm">

                <!-- Step 1: Data Diri & Pendidikan -->
                <div x-show="currentStep === 1" class="form-section space-y-6">
                    <h3 class="text-xl font-bold mb-6 text-primary border-b-2 border-primary pb-3 flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-user-circle text-primary"></i>
                        </div>
                        Data Pribadi Calon Siswa
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama Lengkap -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" x-model="formData.nama_lengkap" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400">
                        </div>
                        <!-- Jenis Kelamin -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Jenis Kelamin <span class="text-red-500">*</span></label>
                            <div class="flex space-x-6">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="jenis_kelamin" value="L" x-model="formData.jenis_kelamin" 
                                           class="h-5 w-5 text-primary focus:ring-primary border-2 border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Laki-laki</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="jenis_kelamin" value="P" x-model="formData.jenis_kelamin" 
                                           class="h-5 w-5 text-primary focus:ring-primary border-2 border-gray-300">
                                    <span class="ml-3 text-gray-700 font-medium">Perempuan</span>
                                </label>
                            </div>
                        </div>
                        <!-- Tempat Lahir -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Tempat Lahir <span class="text-red-500">*</span></label>
                            <input type="text" x-model="formData.tempat_lahir" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400">
                        </div>
                        <!-- Tanggal Lahir -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Tanggal Lahir <span class="text-red-500">*</span></label>
                            <input type="date" x-model="formData.tanggal_lahir" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition text-gray-700">
                        </div>
                        <!-- Agama -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Agama <span class="text-red-500">*</span></label>
                            <select x-model="formData.agama" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition text-gray-700">
                                <option value="" class="text-gray-400">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>
                        <!-- Pekerjaan -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Pekerjaan <span class="text-red-500">*</span></label>
                            <input type="text" x-model="formData.pekerjaan" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400" 
                                   placeholder="Siswa/Mahasiswa/Pelajar">
                        </div>
                        <!-- Kebangsaan -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Kebangsaan <span class="text-red-500">*</span></label>
                            <input type="text" x-model="formData.kebangsaan" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl bg-gray-100 text-gray-600" 
                                   value="WNI" readonly>
                        </div>
                        <!-- Alamat -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Alamat Lengkap <span class="text-red-500">*</span></label>
                            <textarea x-model="formData.alamat" rows="3" 
                                      class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400"></textarea>
                        </div>
                        <!-- Kontak -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">No. HP/WhatsApp <span class="text-red-500">*</span></label>
                            <input type="text" x-model="formData.no_hp" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400">
                        </div>
                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                            <input type="email" x-model="formData.email" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400">
                        </div>
                        <!-- Jenjang Asal -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Pilih Paket Belajar <span class="text-red-500">*</span></label>
                            <select x-model="formData.asal_sekolah" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition text-gray-700">
                                <option value="" class="text-gray-400">Pilih Paket Belajar</option>
                                <option value="Paket A">Paket A</option>
                                <option value="Paket B">Paket B</option>
                                <option value="Paket C">Paket C</option>
                            </select>
                        </div>
                        <!-- Nama Lembaga -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lembaga (SMP/MTs) <span class="text-red-500">*</span></label>
                            <input type="text" x-model="formData.nama_lembaga" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400">
                        </div>
                        <!-- Alamat Lembaga -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-2">Alamat Lembaga <span class="text-red-500">*</span></label>
                            <textarea x-model="formData.alamat_lembaga" rows="3" 
                                      class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Data Orang Tua -->
                <div x-show="currentStep === 2" class="form-section space-y-6">
                    <h3 class="text-xl font-bold mb-6 text-primary border-b-2 border-primary pb-3 flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-users text-primary"></i>
                        </div>
                        Data Orang Tua/Wali
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Data Ayah -->
                        <div class="md:col-span-2 bg-gradient-to-r from-blue-50 to-blue-100 p-6 rounded-xl border border-blue-200">
                            <h4 class="font-bold text-lg text-primary mb-4 flex items-center">
                                <i class="fas fa-male mr-2"></i> Data Ayah Kandung
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2">Nama Ayah <span class="text-red-500">*</span></label>
                                    <input type="text" x-model="formData.nama_ayah" 
                                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2">Pekerjaan Ayah <span class="text-red-500">*</span></label>
                                    <select x-model="formData.pekerjaan_ayah" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition text-gray-700">
                                        <option value="" class="text-gray-400">Pilih Pekerjaan</option>
                                        <option value="PNS">PNS</option>
                                        <option value="TNI/Polri">TNI/Polri</option>
                                        <option value="Swasta">Swasta</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Data Ibu -->
                        <div class="md:col-span-2 bg-gradient-to-r from-pink-50 to-pink-100 p-6 rounded-xl border border-pink-200">
                            <h4 class="font-bold text-lg text-pink-700 mb-4 flex items-center">
                                <i class="fas fa-female mr-2"></i> Data Ibu Kandung
                            </h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2">Nama Ibu <span class="text-red-500">*</span></label>
                                    <input type="text" x-model="formData.nama_ibu" 
                                           class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2">Pekerjaan Ibu <span class="text-red-500">*</span></label>
                                    <select x-model="formData.pekerjaan_ibu" 
                                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition text-gray-700">
                                        <option value="" class="text-gray-400">Pilih Pekerjaan</option>
                                        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                        <option value="PNS">PNS</option>
                                        <option value="Swasta">Swasta</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Kontak Orang Tua -->
                        <div class="md:col-span-2">
                            <label class="block text-sm font-bold text-gray-700 mb-2">No. HP Orang Tua <span class="text-red-500">*</span></label>
                            <input type="text" x-model="formData.no_hp_ortu" 
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl input-focus transition placeholder-gray-400">
                        </div>
                    </div>
                </div>

                <!-- Step 3: Pilihan Jurusan -->
                <div x-show="currentStep === 3" class="form-section space-y-6">
                    <h3 class="text-xl font-bold mb-6 text-primary border-b-2 border-primary pb-3 flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-graduation-cap text-primary"></i>
                        </div>
                        Pilihan Jurusan
                    </h3>
                    <div class="grid grid-cols-1 gap-6">
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 p-6 rounded-xl border border-gray-200">
                            <h4 class="font-bold text-lg text-gray-800 mb-4">Pilih Jurusan <span class="text-red-500">*</span></h4>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <label class="flex items-center p-4 border-2 rounded-xl cursor-pointer radio-card transition-all duration-300"
                                       :class="{'border-primary bg-blue-50 shadow-md': formData.jurusan_pilihan === 'IPA'}">
                                    <input type="radio" name="jurusan_pilihan" value="IPA" x-model="formData.jurusan_pilihan" 
                                           class="h-5 w-5 text-primary focus:ring-primary border-2 border-gray-300">
                                    <div class="ml-4">
                                        <span class="block font-bold text-gray-900">IPA</span>
                                        <span class="block text-sm text-gray-600 mt-1">Ilmu Pengetahuan Alam</span>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border-2 rounded-xl cursor-pointer radio-card transition-all duration-300"
                                       :class="{'border-primary bg-blue-50 shadow-md': formData.jurusan_pilihan === 'IPS'}">
                                    <input type="radio" name="jurusan_pilihan" value="IPS" x-model="formData.jurusan_pilihan" 
                                           class="h-5 w-5 text-primary focus:ring-primary border-2 border-gray-300">
                                    <div class="ml-4">
                                        <span class="block font-bold text-gray-900">IPS</span>
                                        <span class="block text-sm text-gray-600 mt-1">Ilmu Pengetahuan Sosial</span>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border-2 rounded-xl cursor-pointer radio-card transition-all duration-300"
                                       :class="{'border-primary bg-blue-50 shadow-md': formData.jurusan_pilihan === 'Bahasa'}">
                                    <input type="radio" name="jurusan_pilihan" value="Bahasa" x-model="formData.jurusan_pilihan" 
                                           class="h-5 w-5 text-primary focus:ring-primary border-2 border-gray-300">
                                    <div class="ml-4">
                                        <span class="block font-bold text-gray-900">Bahasa</span>
                                        <span class="block text-sm text-gray-600 mt-1">Bahasa dan Sastra</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <!-- Persyaratan -->
                        <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-400 p-5 rounded-r-lg">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-exclamation-circle text-yellow-500 text-2xl mt-1"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-bold text-yellow-800">Persyaratan Pendaftaran</h4>
                                    <div class="mt-3 text-sm text-yellow-700">
                                        <ul class="list-disc pl-5 space-y-2">
                                            <li>Fotokopi rapor kelas 7-9</li>
                                            <li>Fotokopi akta kelahiran dan KK</li>
                                            <li>Pas foto 3x4 (2 lembar)</li>
                                            <li>Surat keterangan lulus dari sekolah asal</li>
                                            <li>Fotokopi SKHUN (bagi yang sudah memiliki)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pernyataan -->
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-5 rounded-lg border border-gray-200">
                            <div class="flex items-start">
                                <div class="flex items-center h-5 mt-1">
                                    <input id="pernyataan" type="checkbox" x-model="formData.pernyataan" 
                                           class="h-5 w-5 text-primary focus:ring-primary border-2 border-gray-300 rounded">
                                </div>
                                <div class="ml-4">
                                    <label for="pernyataan" class="font-bold text-gray-700">Dengan ini saya menyatakan bahwa semua data yang saya isi adalah benar. <span class="text-red-500">*</span></label>
                                    <p class="text-sm text-gray-600 mt-1">Data yang sudah dikirim tidak dapat diubah kembali. Pastikan semua data yang Anda masukkan sudah benar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-10 border-t pt-8">
                    <button type="button" @click="prevStep" x-show="currentStep > 1" 
                            class="px-6 py-3 border-2 border-gray-300 rounded-xl text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary transition-all duration-300 font-bold">
                        <i class="fas fa-arrow-left mr-2"></i> Kembali
                    </button>
                    <button type="button" @click="nextStep" x-show="currentStep < 3" 
                            class="ml-auto px-6 py-3 bg-gradient-to-r from-primary to-secondary text-white rounded-xl hover:from-darkblue hover:to-primary focus:outline-none focus:ring-2 focus:ring-primary transition-all duration-300 font-bold shadow-md hover:shadow-lg">
                        Selanjutnya <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                    <button type="submit" x-show="currentStep === 3" 
                            class="ml-auto px-6 py-3 bg-gradient-to-r from-success to-green-600 text-white rounded-xl hover:from-green-600 hover:to-success focus:outline-none focus:ring-2 focus:ring-green-500 transition-all duration-300 font-bold shadow-md hover:shadow-lg">
                        <i class="fas fa-paper-plane mr-2"></i> Kirim Pendaftaran
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="gradient-header text-white py-6 mt-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h3 class="text-lg font-bold">SKB Dinas Pendidikan Kota Palembang</h3>
                    <p class="text-blue-100 text-sm">Jl. Pendidikan No. 123, Palembang - Sumatera Selatan</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
            <div class="border-t border-blue-400 mt-4 pt-4 text-center text-sm text-blue-100">
                © 2025 SKB Dinas Pendidikan Kota Palembang. All rights reserved.
            </div>
        </div>
    </footer>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('ppdbForm', () => ({
            currentStep: 1,
            formData: {
                nama_lengkap: '',
                jenis_kelamin: '',
                tempat_lahir: '',
                tanggal_lahir: '',
                agama: '',
                pekerjaan: '',
                kebangsaan: 'WNI',
                alamat: '',
                no_hp: '',
                email: '',
                asal_sekolah: '',
                nama_lembaga: '',
                alamat_lembaga: '',
                nama_ayah: '',
                pekerjaan_ayah: '',
                nama_ibu: '',
                pekerjaan_ibu: '',
                no_hp_ortu: '',
                jurusan_pilihan: '',
                pernyataan: false
            },
            nextStep() {
                if (this.validateStep()) {
                    this.currentStep++;
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                }
            },
            prevStep() {
                this.currentStep--;
                window.scrollTo({ top: 0, behavior: 'smooth' });
            },
            validateStep() {
                if (this.currentStep === 1) {
                    if (!this.formData.nama_lengkap) return this.showError('Nama lengkap harus diisi');
                    if (!this.formData.jenis_kelamin) return this.showError('Jenis kelamin harus dipilih');
                    if (!this.formData.tanggal_lahir) return this.showError('Tanggal lahir harus diisi');
                    if (!this.formData.agama) return this.showError('Agama harus dipilih');
                    if (!this.formData.no_hp) return this.showError('Nomor HP harus diisi');
                    if (!this.formData.email) return this.showError('Email harus diisi');
                    if (!this.formData.asal_sekolah) return this.showError('Paket belajar harus dipilih');
                }
                if (this.currentStep === 2) {
                    if (!this.formData.nama_ayah) return this.showError('Nama ayah harus diisi');
                    if (!this.formData.pekerjaan_ayah) return this.showError('Pekerjaan ayah harus dipilih');
                    if (!this.formData.nama_ibu) return this.showError('Nama ibu harus diisi');
                    if (!this.formData.pekerjaan_ibu) return this.showError('Pekerjaan ibu harus dipilih');
                }
                if (this.currentStep === 3) {
                    if (!this.formData.jurusan_pilihan) return this.showError('Jurusan harus dipilih');
                    if (!this.formData.pernyataan) return this.showError('Anda harus menyetujui pernyataan');
                }
                return true;
            },
            showError(message) {
                alert('Error: ' + message);
                return false;
            },
            submitForm() {
                if (this.validateStep()) {
                    // Simulasi pengiriman data
                    const loading = alert('Sedang mengirim data...');
                    
                    setTimeout(() => {
                        alert('Pendaftaran berhasil dikirim!\nNo. Pendaftaran: PPDB-' + Math.floor(Math.random() * 10000));
                        this.resetForm();
                    }, 1500);
                }
            },
            resetForm() {
                this.currentStep = 1;
                this.formData = {
                    nama_lengkap: '',
                    jenis_kelamin: '',
                    tempat_lahir: '',
                    tanggal_lahir: '',
                    agama: '',
                    pekerjaan: '',
                    kebangsaan: 'WNI',
                    alamat: '',
                    no_hp: '',
                    email: '',
                    asal_sekolah: '',
                    nama_lembaga: '',
                    alamat_lembaga: '',
                    nama_ayah: '',
                    pekerjaan_ayah: '',
                    nama_ibu: '',
                    pekerjaan_ibu: '',
                    no_hp_ortu: '',
                    jurusan_pilihan: '',
                    pernyataan: false
                };
            }
        }));
    });
</script>
</body>
</html>