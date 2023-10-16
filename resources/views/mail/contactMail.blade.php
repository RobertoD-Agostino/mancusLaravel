<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div>
        <ul>
            <li>
                <p>Nome:  {{ $nome }}</p>  
            </li>

            <li>
                <p>Email: {{ $email }}</p>
            </li>

            <li>
                <p>Età: {{ $age }}</p>
            </li>

            <li>
                <p>Allergie: {{ $allergie }}</p>
            </li>

            <li>
                <p>Idea per il tatuaggio: {{ $textArea }}</p>
            </li>

            <li>
                <p>Budget: {{ $budget }}</p>
            </li>

            <li>
                <p>Città: {{ $city }}</p>
            </li>

            <li>
                <p>Data desidarata per l'appuntamento {{ $appointment }}</p>
            </li>

        </ul>
    </div>


    
</body>
</html>