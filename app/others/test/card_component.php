<?php
    include("../../reusable/header.php"); 
    include("../../reusable/navbar.php");
    include_once("../../classes/components/card.php");

    echo "<h4>Card Component Test</h4>";

    Card::create("Test", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test Card 1", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test Card 2", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test Card 4", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test Card 6", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test Card 3", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test Card #09", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test Card 12", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test Card #32", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test Card #", "Testing it.", "google.com", "github.com");
    Card::create("Test @", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::create("Test @", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci labore id voluptatum, nostrum suscipit natus dolores illo eveniet possimus, inventore consequatur cupiditate error iste accusamus voluptate sapiente magni, libero voluptates.", "google.com", "github.com");
    Card::display();

    include("../../reusable/footer.php");
?>