<html>
    <head>
        <title>CSS Tutorial</title>
        <style>
            /* Universal selector */
            *{
                margin : 0;
                padding : 0;
            }
            body{
                margin : 20px;
            }
            /* access by tag name */
            h1{
                color :green; /* text color */
                border : 0.5px solid black;
                margin : 10px;
                padding : 10px;
            }
            h2{
                color : blue;
            }

            button{
                background : #2980b9;
                color : white;
                width : 150px;
                height : 35px;
                font-size : 18px;
                font-family: courier new;
                border-radius : 10px;
                border : none;
            }
            p{
                background : rgb(0,255,0);
                padding : 10px;
                font-size : 18px;
                margin-bottom : 10px;
                margin-top : 10px;
            }
        </style>
    </head>
    <body>
        <h1 >Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>

        <p>This is a paragraph</p>

        <button>Button</button>
    </body>
</html>