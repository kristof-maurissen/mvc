<!DOCTYPE HTML> 
<!-- src/VDAB/MijnProject/Presentation/boekenlijst.php --> 
 
    <head> 
        <meta charset=utf-8> 
        <title>Boeken</title> 
        <style> 
            table   { border-collapse: collapse; } 
            td, th  { border: 1px solid black; padding: 3px; } 
            th      { background-color: #ddd; } 
        </style> 
    </head> 
    <body> 
        <h1>Boekenlijst</h1> 
        <table> 
            <tr> 
                <th>Titel</th> 
                <th>Genre</th>
                <th></th>
            </tr> 
            {% for boek in boekenLijst %} 
            <tr>  
                <td> 
                    <a href="updateboek.php?id={{boek.id}}">{{boek.titel}}</a> 
                </td> 
                <td>
                    {{boek.genre.genre}} 
                </td> 
                <td>
                    <a href="verwijderboek.php?id={{boek.id}}">
                    Verwijder
                    </a>
                </td>
            </tr>
            {%endfor%} 
        </table> 
    </body> 


