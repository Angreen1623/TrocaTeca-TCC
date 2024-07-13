@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@700&display=swap" rel="stylesheet">
</head>

<body class="bg-backgtt">
    
<div class="bg-yellowtt-light">
<div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">   
     <div class="md:flex"> 


        <nav class="flex flex-wrap -my-2 max-w-xl content-center">
            
        <h2 class="text-3xl mb-2 text-left text-white sm:text-6xl" style="font-family: 'Fredoka'">O que é TrocaTeca?</h2>    
        <p class="mt-2 text-slate-500 text-left">O TrocaTeca é um ambiente  que visa a intermediação entre alguém que precisa se desfazer de um artigo infantil usado e alguém que precisa obter um artigo infantil. Afinal, o que não serve mais para você, pode servir para alguém, e o que não serve mais para alguém, pode servir para você!</p>
        </nav>


        
        <div class="w-full flex justify-end mt-4"> 
            <img src="{{ asset('image/logo.png') }}" alt="Logo do TrocaTeca" width="400">
        </div>

    </div>
</div>
</div>
</body>
</html>