<?php 

class heading
{
    public function heading()
    {
        $divID = "text-google";
        $hText = "Google LLC é uma empresa multinacional de serviços online e software dos Estados Unidos. O Google hospeda e desenvolve uma série de serviços e produtos baseados na internet e gera lucro principalmente através da publicidade pelo AdWords. A Google é a principal subsidiária da Alphabet Inc.";
        $this->id = $divID;
        $this->text = $hText;
    }
}

$heading = new heading();

echo "<div id='$heading->id'><h3>" . $heading->text . "</h3></div>";


class imgGoogle
{
    public function imgGoogle()
    {
        $imgGoogleURL = "./img/google.png";
        $textAlt = "Logotipo google";
        $imgID = "img-google";
        $this->img = $imgGoogleURL;
        $this->text = $textAlt;
        $this->id = $imgID;
    }
}

$imgGoogle = new imgGoogle();

echo "<img src='$imgGoogle->img' alt='$imgGoogle->text' id='$imgGoogle->id'>";

class button
{
    public function button()
    {
        $divBtnID = "btn";
        $type = "button";
        $this->id = $divBtnID;
        $this->type = $type;
    }
}

$button = new button();

echo "<div id='$button->id'><button>" . $button->type . "</button></div>";

?>