<?PHP

class Category
{    
    public $name;
    
    public $id;

    
    public $posts = array();
    
    function __construct($name) {
        $this->name = $name;
        $query = "SELECT id FROM categories WHERE name = '$name'";
        $result = $connection->mysqli_query($query);
        $row = mysqli_fetch_assoc($result);
        $this->id = $row[0];
    }
}