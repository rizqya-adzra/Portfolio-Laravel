<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <title>Home</title>
</head>
<body>
    <x-navbar></x-navbar>

    <div class="main-home-container">
        <div class="image-home">
            <img style="width: 500px;" src="{{ asset('image/banner.png') }}" alt="Deskripsi gambar">
        </div>
        <div class="main-home">
            <h1 style="font-weight: 900;">Biodata Diri</h1>
            <br>
            <p><b>Nama: Rizqya Adzra Zahira Sudrajat <br> NIS: 12310021 <br> Rombel: PPLG X-2 <br> Rayon: Tajur 4 <br> Alamat: K.p Palasari Kel. Sindangsari RT06/05 Bogor Bogor Timur </b></b><br> <br>
                Saya merupakan seorang siswi dari SMK Wikrama Bogor yang masih menginjak kelas 10 dengan jurusan PPLG (Pengembangan Perangkat Lunak dan Gim). Saya juga bercita-cita untuk menjadi seorang Full-stack Programmer, dengan bekal berbagai projek menggunakan banyak bahasa pemograman. <br>
                Bahasa pemograman yang sedang saya pelajari: <br>
                -PHP dan Laravel <br>
                -JavaScript <br>
                -Python <br> <br>
                Selain itu saya juga sedang belajar software editing seperti Davinci Resolve 18, software digital painting, dan software Blender 3D.</p>
        </div>
    </div>

    <div class="space">
        <p>-------------------------</p>
    </div>

    <div class="sub-home-container">
        <h1 style="font-weight: 900;">Yang saya pelajari di PPLG:</h1>
        <br>
        <p>1. Bagaimana caranya berkomunikasi, public speaking, dan kerja sama tim yang baik dan benar. <br> 2. Kemampuan berbahasa Inggris yang sedikit demi sedikit mulai meningkat. <br> 3. Bagaimana cara menggunakan Hardware (Laptop, Hp, Printer) dengan benar.
            <br> 4. Basic yang harus dipelajari sebelum menggunakan Hardware dan Software. <br> 5. Tatakrama dan budaya kerja. <br> 6. Cara membuat Makalah dan Portfolio sesuai dengan keinginan industri. <br> 7. Caranya mengembangkan perangkat lunak/aplikasi/web.
            <br> 8. Belajar beberapa bahasa pemograman seperti PHP, dan Javascript.
        </p>
    </div>

    <x-footer></x-footer>
</body>
</html>