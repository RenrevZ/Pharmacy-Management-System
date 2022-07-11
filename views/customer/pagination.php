<?php
    require_once '../../inc/config.php';
    $data = $pdo->prepare(" SELECT * FROM customer ORDER BY `name` ASC");
    $data->execute();
    $data->fetch();
    $count = $data->rowCount();
    
        // instantiate pagination
        $result_per_page = 10;
       $number_of_page = ceil($count/$result_per_page);
      
       $page =1;
       // determine which page is active
       if(!isset($_GET['page'])){
    
       }else{
        $page = $_GET['page'];
        // if number of page is >  $number_of_page hence redirect to previous page
       if($_GET['page'] > $number_of_page){
        header('location:customer.php?page='.$_GET['page']-1);
       }

        // if number of page is <  $number_of_page hence redirect to previous page
       if($_GET['page'] == 0){
        header('location:customer.php?page='.$_GET['page']+1);
       }
    
       }
      
       $starting_limit_number = ((int)$page-1)*(int)$result_per_page;
       
        // limit the pagination number like 1234....7891012
       function get_pagination_links($current_page, $total_pages, $url)
       {
           $links = "";
           if ($total_pages >= 1 && $current_page <= $total_pages) {
               $links .= "<a class='page-link' href=\"{$url}?page=1\">1</a>";
               $i = max(2, $current_page - 5);
               if ($i > 2)
                   $links .= " ... ";
               for (; $i < min($current_page + 4, $total_pages); $i++) {
                   $links .= "<a class='page-link' href=\"{$url}?page={$i}\">{$i}</a>";
               }
               if ($i != $total_pages)
                   $links .= " ... ";
               $links .= "<a class='page-link' href=\"{$url}?page={$total_pages}\">{$total_pages}</a>";
           }
           return $links;
       }
    
      