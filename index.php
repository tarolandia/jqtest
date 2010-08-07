<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.js"></script>
        <style>
            #cont{
                position: relative;
                min-height: 600px;
                height: auto;
                width: 600px;
                background-color: red;
                float: left;
            }
            
            #details{
                height: 400px;
                width: 300px;
                float: left;
                margin-left: 50px;
                border: 1px solid;
            }
            .hello{
                height: 38px;
                width: 38px;
                background-color: blue;
                float:left;
                border: 1px solid yellow;
                margin: 1px 2px;
                padding: 2px 1px;
                cursor: pointer;
            }
            
            .selected{
                background-color: red;
            }
            
            .rand1{
                padding: 1px 2px 2px 1px;
                margin: 2px 2px 1px 0px;
            }
            .rand2{
                padding: 2px 0px 2px 1px;
                margin: 2px 0px 3px 1px;
            }
            .rand3{
                padding: 0px 2px 2px 1px;
                margin: 3px 1px 1px 3px;
            }
            .rand4{
                padding: 3px 4px 0px 1px;
                margin: 0px 0px 0px 0px;
            }
            .rand5{
                padding: 2px 2px 2px 2px;
                margin: 2px 5px 1px 0px;
            }
            .rand6{
                padding: 7px 2px 2px 5px;
                margin: 2px 1px 1px 2px;
            }
            .rand7{
                padding: 10px 0px 0px 1px;
                margin: 1px 3px 5px 9px;
            }
            .rand8{
                padding: 3px 2px 1px 0px;
                margin: 3px 2px 1px 0px;
            }
            .rand9{
                padding: 4px 2px
                margin: 3px 2px 1px;
            }
            .rand0{
                padding: 1px 10px 1px;
                margin: 5px;
            }
            .randf1{
                height: 18px;
                width: 38px;
                float: right;
            }
            .randf2{
                height: 20px;
                width: 5px;
                float: right;
            }
            .randf3{
                height: 50px;
                width: 33px;
            }
            .randf4{
                height: 12px;
                width: 100px;
                float: right;
            }
            .randf5{
                height: 32px;
                width: 30px;
            }
            .randf6{
                height: 65px;
                width: 20px;
            }
            .randf7{
                height: 28px;
                width: 78px;
            }
            .randf8{
                height: 19x;
                width: 31px;
                float: right;
            }
            .randf9{
                height: 78px;
                width: 58px;
            }
            .randf0{
                height: 100px;
                width: 50px;
            }           
        </style>
    </head>
    <body>
        <div id="cont" >
            <div class="hello">
                
            </div>
            
            
        </div> 
        
        <div id="details">
            
        </div>
        
        
        <input type="button" value="add" onclick="add_div();"/>
        
        
        <br style="clear:both;" /><br />
        <div >
            <ul id="list">
                <li>Item 1</li>
                <li>Item 2</li>
            </ul>
        </div>
        <input type="text" id="input" name="input"/>
        <input type="button" value="add" onclick="add_li($('#input').val());"/>
        <script type="text/javascript">
            $(document).ready(function(){
                    
                    $('#cont').delegate(".hello", "click", function(){
                            
                            var x = $(this).position().left,
                                y = $(this).position().top,
                                h = $(this).height(),
                                w = $(this).width(),
                                ih = $(this).innerHeight(),
                                iw = $(this).innerWidth(),
                                oh = $(this).outerHeight(true),
                                ow = $(this).outerWidth(true),
                                ohf = $(this).outerHeight(false),
                                owf = $(this).outerWidth(false),
                                px = $(this).offset().left,
                                py = $(this).offset().top,
                                text = "";
                              
                            $('#details').html("");
                            text = "Document Offset Top: " + py + "px<br/>";
                            text += "Document Offset Left: " + px + "px<br/><br/>";
                            text += "Parent Offset Top: " + y + "px<br/>";
                            text += "Parent Offset Left: " + x + "px<br/><br/>";
                            text += "Width: " + w + "px<br/>";
                            text += "Height: " + h + "px<br/><br/>";
                            text += "Inner Width: " + iw + "px<br/>";
                            text += "Inner Height: " + ih + "px<br/><br/>";
                            text += "Outer Width with margin: " + ow + "px<br/>";
                            text += "Outer Height with margin: " + oh + "px<br/><br/>";
                            text += "Outer Width without margin: " + owf + "px<br/>";
                            text += "Outer Height without margin: " + ohf + "px<br/><br/>";
                            
                            
                            $('#details').append(text);
                            
                        
                        });
                    $('#list').delegate("li", "click", function(){
                            $(this).toggleClass("selected");
                        
                        });
                });
            
            function add_div(){
                var rand = Math.floor(Math.random()*10);
                var rand2 = Math.floor(Math.random()*10);
                $('<div class="hello rand'+rand+' randf'+rand2+'"></div>').appendTo('#cont');
            }
            
            function add_li(texto){
                $('<li>'+texto+'</li>').appendTo('#list');
                $('#input').val('');
            }
        </script>
        
    </body>    
</html>    