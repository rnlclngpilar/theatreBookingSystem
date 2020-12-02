
//--------------------------------------------------------------------------------
//  Page numbers are references to (Chapter 8 JavaScript 1: Language Fundamentals)
//      the Second Edition of Fundamentals of Web Development
//      By Randy Connolly and Ricardo
//
//  The following code has been adapted/modified from
//      //Example "Immediately-Invoked Function Expression" (pg. 375)
//          //These will work (pg. 376)
//      //example.js (pg.384)
//
//  For Movie, 
//      the properties Title, Length, and Image were all lowercase in the textbook
//--------------------------------------------------------------------------------

//--------------------------------------------------------------------------------
//      User Data
//--------------------------------------------------------------------------------
var userInfo = (function() {
        var private = { name : 'NameOfUser', age : '18'};
        return {
            getName : function() {return private.name; },
            getAge : function() {return private.age; },
            setAge : function(age) {
                if (age<'18'){                          //Compare for movie rateing
                    private.age = age;
                }   
            }
        };
    }());

    
    console.log( userInfo.getName() );
    console.log( userInfo.getAge() );
    userInfo.setAge(18);
//--------------------------------------------------------------------------------


//code below hides/unhide the movie display
document.getElementById("btn1").addEventListener("click",function()
        {
            var box1 = document.getElementById("div2");
            if (box1.style.display == "none")
            {
                box1.style.display = "block";
            }
            else
            {
                box1.style.display = "none";
            }

        })
//--------------------------------------------------------------------------------
//  Other Code (Visual Studio Code suggested using a class)
//--------------------------------------------------------------------------------
/*
//Constructor for MovieOpt objects
class MovieOpt {
    constructor(title, length, icon) {
        "use strict";
        this.title = title;
        this.length = length;
        this.icon = icon;
        this.output = function() {
            return this.title + ", " + this.length + ", " + this.icon;
        }
    }
}
*/

//--------------------------------------------------------------------------------
//      Movie Data
//
//          For Movie.Image,
//              File Name Convention:   year-month_movieNumber
//              Note:   (max movie # = 999, new count each month)
//              Ex.     "2019-05_001" represents [2019-05, #001]
//--------------------------------------------------------------------------------

/*
class Movie {
    constructor(Title, Length, Image) {
        "use strict";
        this.Title = Title;
        this.Length = Length;
        this.Image = Image;
    }
}

(function () {
    var movieOptions = movieArray();

    //Loop through array of movie objects
    for (var i = 0; i < movieOptions.length; i++) {
        var m = movieOptions[i];
        document.write("<table class='poster'>");      //Table specific
        document.write("<td>");                        //Table specific
        document.write("<img src='movieImgs/" + m.Image + ".jpg' class='boxImg'>");
        document.write("</td>");                       //Table specific

        document.write("<td>");                        //Table specific
        //the in loop, which loops through properties in an object
        for (var propertyName in m) {
            document.writeln();
            document.write("<p><strong>" + propertyName + ": </strong>" + m[propertyName] + "</p>");
        }
        document.write("</td>");                       //Table specific
        document.write("</table>");                    //Table specific
    }
})();


function movieArray() {
    "use strict";
    //create array of movie objects
    var movieOptions = [
        new Movie("First Movie", "1 hour, 32 minutes", "2019-05_001"),
        new Movie("Second Movie", "1 hour, 32 minutes", "2019-05_002")
    ];

    ///push new movie object onto end of array
    movieOptions.push(new Movie("Third Movie", "1 hour, 32 minutes", "2019-07_001"));
    return movieOptions;
}

*/