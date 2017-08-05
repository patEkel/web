<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Displayed</title>
    <!-- Link to Bootstrap css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- WARNGING: Respond.js doesn't work if you view the page via file://...-->
    <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"> </script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/ respond.min.js"></script>
    <![endif]-->
    <style>
        .navbar-brand {
            font-size: 1.8em;
        }
        #topContainer {
            background-image: url("images/Earth_At_Nightt.jpg");
            height: 400px;
            width: 100%;
            background-size: cover;
        }

        #topRow {
            margin-top: 100px;
            text-align: center;
        }

        #topRow h1 {
            font-size: 300%;
        }

        #emailSignup {
            margin-top: 50px;
        }

        .bold {
            font-weight: bold;
        }

        .marginTop {
            margin-top: 30px;
        }

        .center {
            text-align: center;
        }

        .title {
            margin-top: 100px;
            font-size: 300%;
        }

        #footer {
            background-color: #B0D1FB;
            padding-top: 70px;
            width: 100%;
        }

        #rowOneAccordians {
            margin-top: 50px;
        }

        .marginBotton {
            margin-bottom: 30px;
        }

        .imageHolder {
            width: 300px;
        }

        /* Style the buttons that are used to open and close the accordion panel */
        button.accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 50px;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
        }

            button.accordion:after {
                content: '\02795'; /* Unicode character for "plus" sign (+) */
                font-size: 13px;
                color: #777;
                float: right;
                margin-left: 5px;
            }

            button.accordion.active:after {
                content: "\2796"; /* Unicode character for "minus" sign (-) */
            }

            /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
            button.accordion.active, button.accordion:hover {
                background-color: #ddd;
            }

        /* Style the accordion panel. Note: hidden by default*/
        div.panel {
            font-size: 11px;
            align-content: left;
            background-color: white;
            max-height: 1px;
            transition: max-height 0.2s ease-out;
            box-sizing: border-box;
            width: 275px;
            height: 300px;
            overflow: scroll;
            white-space: nowrap;
            line-height: 13px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">
    <!--Navbar-->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-type="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Data Displayed</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#topContainer">Home</a></li>
                    <li class=""><a href="#details">Visualizations</a></li>
                    <li class=""><a href="#footer">Contact Us</a></li>
                </ul>
                <!--<form class="navbar-form navbar-right">
                 <d iv class="form-group">
                    <input type="email" placeholer="Email" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <input type="password" placeholder="Password" class="form-control" />
                      </div>
                      <button type="submit" class="btn btn-success"> Log In </button>
                    </form>-->
            </div>
        </div>
    </div>

    <!-- top level container-->
    <div class="container contentContainer" id="topContainer" style="min-height: 930px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" id="topRow"> 
                <form class="marginTop">
                   <div class="input-group">
                        <!--<span class="input-group-addon">@</span>

                        <input type="email" class="form-control" placeholer="EX input type(line 102)" /> -->
                    </div>
                    <!--<input type="Submit" class="btn btn-success btn-lg marginTop" />-->
                    
                </form>
            </div>
        </div>
    </div>
    <!-- Lower Content-->
    <div class="container contentContainer" id="details" style="min-height: 930px;">
        <!--title-->
        <div class="topRow" id="center">
            <h1 class="center title">Map Overlays</h1>
            <p class="lead center">details</p>
        </div>

        <!-- ggplot -->
        <div class="row marginBotton">
            <!--column_1-->
            <div class="col-md-4 marginTop">
                <h2>Header ONE</h2>
                <p class="center"><img src="images/US_Mean_.15.png" class="imageHolder"></p>
                <button class="accordion">CODE</button>
                <div class="panel">
                    <p>
                        library(RCurl)<br>
                        library(xlsx)<br>
                        library(zipcode)<br>
                        library(ggmap)<br>
                        library(ggplot2)<br>
                        urlfile <-'http://www.psc.isr.umich.edu/dis/census/Features/tract2zip/MedianZIP-3.xlsx'<br>
                        destfile <- "census20062010.xlsx"<br>
                        download.file(urlfile, destfile, mode="wb")<br>
                        census <- read.xlsx2(destfile, sheetName = "Median")<br>
                        head(census)<br>
                        census <- census[c('Zip','Median..')]<br>
                        names(census) <- c('Zip','Median')<br>
                        head(census)<br>
                        census$Median <- as.character(census$Median)<br>
                        census$Median <- as.numeric(gsub(',','',census$Median))<br>
                        head(census)<br>
                        data("zipcode")<br>
                        census$Zip <- clean.zipcodes(census$Zip)<br>
                        census <- merge(census, zipcode, by.x='Zip', by.y='zip')<br>
                        head(census)<br>
                        map<-get_map(location='united states', zoom=4, maptype = "terrain", source='google',color='color')<br>
                        print(head(census,5))<br>
                        ggmap(map) + geom_point(aes(x=longitude, y=latitude, show_guide = TRUE, colour=Median),data=census, alpha=.15, na.rm = T)  +  scale_color_gradient(low="beige", high="blue")<br>
                    </p>
                </div>
            </div>

            <!--column_2-->
            <div class="col-md-4 marginTop">
                <h2>Header TWO</h2>
                <p class="center"><img src="images/US_States_Life_Expectancy.PNG" class="imageHolder"></p>
                <button class="accordion">CODE</button>
                <div class="panel" style="">
                    <p>
                        up <- map_data("state")<br>
                        file <-read_excel(path='C:/Users/pat/Desktop/mortality_risk.xlsx')<br>
                        file <- file[c('state','life__expectancy')]<br>
                        file <-na.omit(file)#remove missing data<br>
                        file <- mutate(file, state = tolower(state))<br>
                        head(file)<br>
                        file$life__expectancy <- as.numeric(file$life__expectancy)<br>
                        file$life__expectancy<br>
                        g <- ggplot()<br>
                        g <- g+geom_map(data = up, map = up, aes(x=long, y=lat, map_id=region), <br>
                        fill="#ffffff", color="#ffffff", size=.15)

                        g<br>
                        g <- g + geom_map(data=file, map=up, aes(fill=life__expectancy, map_id=state), color="#333333", size=0.15)<br>
                        g<br>
                    </p>
                </div>
            </div>
            <!--column_3-->
            <div class="col-md-4 marginTop">
                <h2>Header THREE</h2>
                <p class="center"><img src="images/US_Counties_Life_Expectancy.png" class="imageHolder"></p>
                <button class="accordion">CODE</button>
                <div class="panel">
                    <p>
                        file <-read_excel(path='C:/Users/pat/Desktop/mortality_risk.xlsx')<br>
                        file <- file[c('_region', '_subregion','_life_expectancy')]<br>
                        names(file) <- c('subregion', 'region', 'life_expectancy')<br>
                        file <- mutate(file, region = tolower(region), subregion = tolower(subregion))<br>
                        file$life_expectancy <- as.numeric(file$life_expectancy)<br>
                        summary(file)<br>
                        # get map data for US counties<br>
                        county_map <- map_data("county")<br>
                        #merge mortality and county_map<br>
                        mortality_map <- merge(county_map, file, by.x=c("region", "subregion"), by.y=c("region", "subregion"), all.x=TRUE)<br>
                        mortality_map <- arrange(as.data.frame(mortality_map), group, order)<br>
                        up<-map_data("county")<br>
                        ggplot(mortality_map, aes(x=long, y=lat, group = group, fill = life_expectancy)) + <br>
                        geom_map(data=mortality_map, map=up, aes(fill = life_expectancy, map_id = region))+ <br>
                        geom_polygon()+ coord_map() + <br>
                        scale_fill_gradientn("life__expectancy" ,colours=rev(brewer.pal(9,"YlOrRd")))<br>
                    </p>
                </div>
            </div>
            <!--ends first row div-->
        </div>

        <!--title-->
        <div class="topRow" id="center">
            <h1 class="center title"> Time-Series</h1>
            <p class="lead center"> details</p>
        </div>

        <!-- time - series -->
        <div class="row marginBotton">
            <!--column_1-->
            <div class="col-md-4 marginTop">
                <h2>Header ONE</h2>
                <p class="center"><img src="images/Baseball.PNG" class="imageHolder"></p>
                <button class="accordion">CODE</button>
                <div class="panel">
                    <p>
                        # Calculate correlation coeficient for the differnt explanatory variables and round to 3 decimal place<br>
                        cors<-c(round(cor(batting$DOUBLE, batting$R), digits=3), round(cor(batting$TRIPLE, batting$R), digit=3), round(cor(batting$HR, batting$R), digits=3), round(cor(batting$SB, batting$R), digits=3))<br>
                        # Create plot of Runs ~ double, triples, home runs, and stolent bases so I can compare how each one correlates with number of runs scores<br>
                        # I also split the data up abased on the american leauge and national leauge so I could see if there was any significant differece between the two<br>
                        r_dub<-ggplot(batting, aes(x=DOUBLE, y = R, color=lgID)) + geom_point(alpha=.2) + geom_smooth(alpha=.3, size=1) + ggtitle("R~Doubles") + xlab(paste("r value = ", toString(cors[1]))) + ylab ("")<br>
                        r_trip<-ggplot(batting, aes(x=TRIPLE, y = R, color=lgID, lab="balls")) + geom_point(alpha=.2) + geom_smooth(alpha=.3, size=1) + ggtitle("R~Triples") + xlab(paste("r value = ", toString(cors[2]))) + ylab ("") <br>
                        r_hr<-ggplot(batting, aes(x=HR, y = R, color=lgID)) + geom_point(alpha=.2) + geom_smooth(alpha=.3, size=1) + ggtitle("R~Home Runs") + xlab(paste("r value = ", toString(cors[3]))) + ylab ("")<br>
                        r_stolen<-ggplot(batting, aes(x=SB, y=R, color=lgID)) + geom_point(alpha=.2) + geom_smooth(alpha=.3, size=1) + ggtitle("R~Stolen Bases") + xlab(paste("r value = ", toString(cors[4]))) + ylab ("")<br>
                        # Here I use multiplot to plot the different scatterplots in the same pane<br>
                        multiplot(r_dub, r_trip, r_hr, r_stolen, cols =2)<br>
                    </p>
                </div>
            </div>
            <!--column_2-->
            <div class="col-md-4 marginTop">
                <h2>Header TWO</h2>
                <p class="center"><img src="images/Iris.PNG" class="imageHolder"></p>
                <button class="accordion">CODE</button>
                <div class="panel">
                    <p>
                        library(MASS)<br>
                        summary(iris)<br>
                        parcoord(iris[c("Sepal.Length", "Sepal.Width", "Petal.Length", "Petal.Width")], col = iris$Species)<br>
                        jadslkfjasd;lkjfkl;dsajf<br>
                    </p>
                </div>
            </div>
            <!--column_3-->
            <div class="col-md-4 marginTop">
                <h2>Header THREE</h2>
                <p class="center"><img src="images/Btc_Vs_Eth.PNG" class="imageHolder"></p>
                <button class="accordion">CODE</button>
                <div class="panel">
                    <p>
                        file <-read_excel(path='C:/Users/pat/Desktop/bothhh.xlsx')<br>
                        btc <- rainbow::fts(x = file$date, y = file$btc)<br>
                        eth <- rainbow::fts(x = file$date, y = file$eth)<br>
                        eth6 <- rainbow::fts(x = file$date, y = file$eth6)<br>
                        plot(btc, plot.type = "functions", plotlegend = TRUE, col="red")<br>
                        lines(eth6, plot.type = "functions", plotlegend = TRUE, col="blue")<br>
                        what the<br>
                    </p>
                </div>
            </div>
            <!--ends second row div-->
        </div>
        <!--title-->
        <div class="topRow" id="center">
            <h1 class="center title"> Linear Regression</h1>
            <p class="lead center"> details</p>
        </div>

        <!-- linear regression -->
        <div class="row marginBotton">
            <!--column_1-->
            <div class="col-md-4 marginTop">
                <h2>Header ONE</h2>
                <p class="center"><img src="images/gdpVsAerable.jpg" class="imageHolder"></p>
                <button class="accordion">CODE</button>
                <div class="panel">
                    <p>should be hidden but theNE IG SHOHFDNFMN DF DSKJFBKJSDNFJKNDSKJFNSDKJNFKJSDNFKJNSDKJFNSDKJNFKJSDNFKSJDNFKJSDNFKJNSDKJFNSDKJNFKJSDNFKJSDJNFKJNSDKJFNSDKJNFKJDSFN</p>
                </div>
            </div>
            <!--column_2-->
            <div class="col-md-4 marginTop">
                <h2>Header ONE</h2>
                <p class="center"><img src="images/gdpVsCpi.jpg" class="imageHolder"></p>
                <button class="accordion">CODE</button>
                <div class="panel">
                    <p>should be hidden but theNE IG SHOHFDNFMN DF DSKJFBKJSDNFJKNDSKJFNSDKJNFKJSDNFKJNSDKJFNSDKJNFKJSDNFKSJDNFKJSDNFKJNSDKJFNSDKJNFKJSDNFKJSDJNFKJNSDKJFNSDKJNFKJDSFN</p>
                </div>
            </div>
            <!--column_3-->
            <div class="col-md-4 marginTop">
                <h2>Header ONE</h2>
                <p class="center"><img src="images/threeVar.PNG" class="imageHolder"></p>
                <button class="accordion">CODE</button>
                <div class="panel">
                    <p></p>
                </div>
            </div>
        <!--ends third row div-->
        </div>
      <!--ends container-->
     </div>


    <!-- Foooter -->
    <div class="container contentContainer" id="footer" style="min-height: 930px, text-align: left;">
        <div class="row">
            <h1 class="center title">Contact Us</h1>
            <p class="lead center">information@datadisplayed.net</p>
            <p class="center"><img src="images/guitar.jpg" class="imageHolder"></p>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script> $(".contentContainer").css("min-height",$(window).height());</script>

    <script>
    /*script to hide small nav on load*/
    $(document).ready(function() {
    console.log("BALLSipPAAmtTTTTTTTT"); 
    alert(ipPAAmt);
    $('.navbar-collapse').show();        
    });

    /*toggle visibility of hidden menu based on clicking*/
    var active = false;
    $('.navbar-toggle').click(function(){
    if(!(active)){
      $('.navbar-collapse').show();
      active = true;
    }
    else
    {
      $('.navbar-collapse').hide();
      active = false;
    }});
    </script>

    <script>
    /*Scipt for code accordians*/
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
     var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
           }
    }
    }
    </script>

  </body>
</html>