<html>
    <head>
        <style>
            ul{
                width: 100px;
            }
            .color-navy{
                background-color: #000080;
                color: #bbbbbb;
            }
        </style>
    </head>
    <body>
        
    <ul>
        <?php
            for($i=1;$i<=20;$i++){
                if($i%2===1){
                    echo'<li>奇数</li>';
                }
                else{
                    echo'<li class="color-navy">偶数</li>';
                }
            }
            ?>
    </ul>
    </body>
</html>