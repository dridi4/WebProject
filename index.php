<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="generator" content="Codeply">
  <title>Codeply simple HTML/CSS/JS preview</title>
  <base target="_self"> 

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">  
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>/* CSS used here will be applied after bootstrap.css */</style>
</head>
<body>
  <hr>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                              <form class="form">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input id="email" placeholder="Email" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Send" type="button" onclick="sendEmail()">
                                  </div>
                                </fieldset>
                              </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src=""></script>

  <script>
  
  </script>
  <script>
    // prevent navigation
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        links[i].addEventListener("click", function(e) {
          var href = this.getAttribute("href")

          if (!href) {
            return
          }

          if (href === '#') {
            // hash only ('#')
            console.debug('Internal nav allowed by Codeply');
            e.preventDefault()
          }
          else if (this.hash) {
            // hash with tag ('#foo')
            var element = null
            try {
              element = document.querySelector(this.hash)
            }
            catch(e) {
              console.debug('Codeply internal nav querySelector failed')
            }
            if (element) {
              // scroll to anchor
              e.preventDefault();
              const top = element.getBoundingClientRect().top + window.pageYOffset
              //window.scrollTo({top, behavior: 'smooth'})
              window.scrollTo(0,top)
              console.debug('Internal anchor controlled by Codeply to element:' + this.hash)
            }
            else {
              // allow javascript routing
              console.debug('Internal nav route allowed by Codeply');
            }
          }
          else if (href.indexOf("/p/")===0 || href.indexOf("/v/")===0) {
            // special multi-page routing
            console.debug('Special internal page route: ' + href)

            var l = href.replace('/p/','/v/')

            // reroute
            e.preventDefault()
            var newLoc = l + '?from=internal'
            console.debug('Internal view will reroute to ' + newLoc) 
            location.href = newLoc
          }
          else if (href.indexOf("./")===0) {
            // special multi-page routing
            console.debug('Special internal ./ route: ' + href)

            var u = parent.document.URL.split("/")
            var pn = href.split("/")[1]
            var plyId = u[u.length-1]

            if (plyId.indexOf('?from')>-1) {
              // already rerouted this
              console.debug('already rerouted')
              plyId = u[u.length-2]
            }

            var l = plyId + '/' + pn
            
            console.debug(u)
            console.debug(pn)
            console.debug('l',l)

            // reroute
            e.preventDefault()
            var newLoc = '/v/' + l + '?from=internal'
            console.debug('Internal page will reroute to ' + newLoc) 
            location.href = newLoc
          }
          else {
            // no external links
            e.preventDefault();
            console.debug('External nav prevented by Codeply');
          }
          //return false;
        })
      }
    }, null);
  </script>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type="text/javascript">
      function sendEmail() {
          var name = $("#name");
          var email = $("#email");
          var subject = $("#subject");
          var body = $("#body");

          if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
              $.ajax({
                 url: 'sendEmail.php',
                 method: 'POST',
                 dataType: 'json',
                 data: {
                     name: name.val(),
                     email: email.val(),
                     subject: subject.val(),
                     body: body.val()
                 }, success: function (response) {
                      if (response.status == "success")
                          alert('Email Has Been Sent!');
                      else {
                          alert('Please Try Again!');
                          console.log(response);
                      }
                 }
              });
          }
      }

      function isNotEmpty(caller) {
          if (caller.val() == "") {
              caller.css('border', '1px solid red');
              return false;
          } else
              caller.css('border', '');

          return true;
      }
  </script>




</body></html>