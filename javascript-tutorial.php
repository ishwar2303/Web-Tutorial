<html>
    <head>
        <title>JavaScript Tutorial</title>
        <style>
            /* write css code here*/
            body{
                background : aqua;
            }
            h1{
                font-size : 30px;
            }
        </style>
        <script>
            function functionOne(){
                var h1 = document.getElementById('heading-one')
                h1.innerHTML = 'Inner content changed'
                h1.style.color = 'red'
                h1.style.fontSize = '40px'
            }
            function functionTwo(){
                alert('button clicked')
            }
        </script>
    </head>
    <body>
        <h1>File type PHP : PHP code, HTML code, JavaScript, CSS</h1>
        <h2>PHP code : server scripting</h2>
        <h2>HTML: structure design (Backend)</h2>
        <h2>CSS : styling</h2>
        <h2>JavaScript : Interaction (event handling)</h2>
        <script>
            console.log('Hello world')
        </script>
        <p>
            syntax:
            event="Function()"
        </p>
        <p>
            <h4>How to access elements using attribute</h4>
            getElementById() return object pointing to the element with the given ID  <br/> 
            getElementsByClassName() <br/>
            getElementsByTagName() <br/>
            getElementsByName() <br/>
        </p>
        <p>
            In CSS syntax
            property-name : value;

            In JavaScript (camel case notation)
            propertyName

        </p>
        <h1 id="heading-one" onmouseover="functionOne()">Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <button onclick="functionTwo()">Button</button>

    <?php 
        // write php code here...
        echo "Text printed using php";

    ?>    
    </body>
</html>
