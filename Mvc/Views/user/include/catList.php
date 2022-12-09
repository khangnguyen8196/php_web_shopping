
<div class="grid__column-2">
    <nav class="category">
        <h3 class="category__heading">Danh mục</h3>
        
                
            <ul class="category-list">
                    <?php 
                    if(isset($data["categories"])){
                        
                    while ($row = mysqli_fetch_array($data["categories"])){          
                    ?>      
                    <li class="category-item ">
                        <a href="/Product/show/<?php echo $row["id"] ?>" class="category-item__link">
                        <?php echo $row['name']?>
                        </a>
                    </li>
                    <?php } }?> 
                </ul>
            
       
        
    </nav>
</div>



      
    