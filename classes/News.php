<?php


class News
{
    private $source;
    private $title;
    private $description;
    private $image;
    private $url;

    //list News function
    public function listNews()
    {
        define("WS","https://newsapi.org");
        define("TOKEN","xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
        $resource="/v2/top-headlines";
        $country="country=ie";

        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,WS.$resource."?".$country."&apiKey=".TOKEN);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $json=curl_exec($ch);

        $info=curl_getinfo($ch);

        if($info['http_code']== 200){
            return json_decode($json, true);
        }else{
            loguear("logs/error.log","a+","Ha ocurrido un error al realizar la petición a ".WS);
            loguear("logs/error.log","a+","Status code devuelto: ".$info['http_code']);
            echo "We are sorry, it looks like the page isn't working right now, please try again later";
            die();
        }




        curl_close($ch);
    }



    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
?>
