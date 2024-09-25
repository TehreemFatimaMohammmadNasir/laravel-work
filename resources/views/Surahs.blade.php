<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The QURAN of the Prophet Muhammad (صلى الله عليه و سلم)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
    body {
    direction: rtl;
    font-family: 'Amiri Quran', serif;
    background: linear-gradient(135deg, #1F6198 0%, #A6C8E0 100%);
    color: #e8e1d2;
    margin: 0;
    padding: 0;
}

h1 {
    direction: ltr;
    color: #ada286;
    text-align: center;
    margin: 30px 0;
    font-size: 2.5rem;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.4);
    transition: color 0.4s ease, transform 0.4s ease, text-shadow 0.4s ease;
}

h1:hover {
    color: #f5f2ee;
    transform: scale(1.05);
    text-shadow: 5px 5px 15px rgba(0, 0, 0, 0.6);
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
}

.card {
    margin-bottom: 30px;
    text-align: center;
    border-radius: 15px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    background-color: #F5F5DC;
    border: 4px solid #d4af37;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    border-color: #bd8908;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.card-text {
    font-size: 1.1rem;
    color: #666;
    margin: 5px 0;
}

.btn {
    background-color: #d4af37; /* Gold color */
    border: none; /* Remove default border */
    color: white;
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.btn a {
    color: white; /* Link color */
    text-decoration: none; /* Remove underline */
}

.btn:hover {
    background-color: #c7a12f; /* Darker gold */
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    h1 {
        font-size: 2rem;
    }
    
    .card-title {
        font-size: 1.3rem;
    }

    .card-text {
        font-size: 1rem;
    }
    
    .btn {
        font-size: 14px;
        padding: 8px 16px;
    }
}



    </style>


</head>

<body>

  
                
                    <h1><center>The QURAN of the Prophet Muhammad (صلى الله عليه و سلم)</center></h1>
                    <div class="container">
                    <div class="row">

                @foreach ($collection as $item)
                    
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $item['englishName'] }}   {{ $item['name'] }} </h5>
                            <p class="card-text">Translation: {{ $item['englishNameTranslation'] }} </p>
                                <p class="card-text">Verses: {{ $item['numberOfAyahs'] }} </p>
                                    <p class="card-text">Revelation Type:  {{ $item['revelationType'] }} </p>
                       
                        <p><button type="button" class="btn"><a href="/read/{{ $item['number'] }}" 
                            target="_blank" rel="noopener noreferrer">Read Surah</a></button></p>
                       </div>
                       </div>
 
                    </div>
             

                   
                @endforeach
           
                    </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>