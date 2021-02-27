<?php
//A class to describe a web page
class Page {
  //The page <title>
  private $title;
  //A variable to hold an href to a stylesheet
  private $stylesheet;
  //A variable to hold a path to the script
  private $script;

  //Constructor
  public function __construct($title, $stylesheet, $script)
  {
    $this->title = $title;
    $this->stylesheet = $stylesheet;
    $this->script = $script;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title) {
    $this->title = $title;
  }

  public function getStylesheet() {
    return $this->stylesheet;
  }

  public function setStylesheet($stylesheet) {
    $this->stylesheet = $stylesheet;
  }

  public function getScript() {
    return $this->script;
  }

  public function setScript($script) {
    $this->script = $script;
  }
  //Create the template for the html head
  public function createHead() {
    $html = "
    <!DOCTYPE>
    <html>
      <head>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='$this->stylesheet'>
        <script src='$this->script'></script>
        <title>$this->title</title>
      </head>
    ";
    return $html;
  }
  //Create the template for the HTML body
  public function createBody() {
    $body = "
      <body>
        <header>
          <h1 class='header'>PHP Lab 05 - OOP PHP</h1>
          <nav>
            <ul>
              <li class='links'><a href='#' class='link-anchor'>Home</a></li>
              <li class='links'><a href='#' class='link-anchor'>Lesson</a></li>
              <li class='links'><a href='#' class='link-anchor'>Lab</a></li>
            </ul>
          </nav>
        </header>
        <main>
          <p class='main-text'>This text was generated using a Public function belonging to a PHP class named Page.</p>
          <button id='pageBtn'>Click Me!</button>
        </main>
        <footer>
          <p class='footer-text'>&#169; Bryan Hughes</p>
        </footer>
      </body>
    </html>";
    return $body;
  }
}
//A class to inherit properties from its parent class Page
class SecondPage extends Page {
  public function createNewBody() {
    $newBody = "
      <body>
        <header>
          <h1>PHP Lab 05 - Second Page</h1>
          <nav>
            <ul>
              <li class='links'><a href='#' class='link-anchor'>New Home</a></li>
              <li class='links'><a href='#' class='link-anchor'>New Lesson</a></li>
              <li class='links'><a href='#' class='link-anchor'>New Lab</a></li>
            </ul>
          </nav>
        </header>
        <main>
          <p class='main-text'><a href='https://www.youtube.com/watch?v=qlnIkLw9es4&t=941s' class='link-anchor' target='_blank'>Relaxing Music</a></p>
          <div id='anotherContainer'><img src='images/anotherOne.jpg' alt='Another One' id='khalid'></div>

        </main>
        <footer>
          <p class='footer-text'>&#169; Bryan Hughes</p>
        </footer>
      </body>
    </html>";
    return $newBody;
  }
}

$myPage = new Page("PHP LAB 05", "styles/style.css", "scripts/script.js");
echo $myPage->createHead();
echo $myPage->createBody();
$mySecondPage = new SecondPage("PHP LAB 05 - Page Two", "styles/style.css", "scripts/script.js");
echo $mySecondPage->createNewBody();
?>