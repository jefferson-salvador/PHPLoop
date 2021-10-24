<?php
  $input = 5;

// 1. LINE
  function DrawLine($num){
    $disp = '';
    
    for($x = 1; $x <= $num; $x++){
      $disp.='* ';
    }
    
    return $disp;
  }

  // 2. SQUARE
  function DrawSquare($num){
    $disp = '';
    for($y = 1; $y <= $num; $y++){
      for($x = 1; $x <= $num; $x++){
        $disp.='* ';
      }
      $disp.='<br/>';
    }
    return $disp;
  }
  
  // 3. STRIPED LINE
  function DrawStripedLine($num){
    $disp = '';
    
    for($x = 1; $x <= $num; $x++){
      $x % 2 == 0 ? $disp.='_ ' : $disp.='* ';
    }

    return $disp;
  }

  // 4. PARALLELOGRAM
  function DrawParallelogram($num){
    $disp = '';

    for($x = 1; $x <= $num; $x++){
      for($y = $num; $y > $x; $y--){
        $disp.='_ ';
      }
      for($y = 1; $y <= $num; $y++){
        $disp.='* ';
      }
      for($y = 1; $y < $x; $y++){
        $disp.='_ ';
      }
      $disp.='<br/>';
    }
    return $disp;
  }

  // 5. TRIANGLE
  function DrawTriangle($num){
    $disp = '';

    for($x = 1; $x <= $num; $x++){
      for($y = $num; $y >= $x; $y--){
        $disp.='* ';
      }
      for($y = 1; $y < $x; $y++){
        $disp.='_ ';
      }
      $disp.='<br/>';
    }
    return $disp;
  }

  // 6. REVERSE TRIANGLE
  function DrawReverseTriangle($num){
    $disp = '';
    for($x = 1; $x <= $num ; $x++){
      for($y = 1; $y <= $x; $y++){
        $disp.='* ';
      }
      for($y = $num; $y > $x; $y--){
        $disp.='_ ';
      }
      $disp.='<br/>';
    }
    return $disp;
  }

  // 7. ISOCELES TRIANGLE
  function DrawIsocelesTriangle($num){
    $disp = '';
    $temp = ($num/2);
    
    for($x = 1; $x <= $num; $x++){
      if($x % 2 != 0){
        for($y = $temp; $y >= 1; $y--){
          $disp.='_ ';
        }
        for($y = 1; $y <= $x; $y++){
          $disp.='* ';
        }
        for($y = $temp; $y >= 1; $y--){
          $disp.='_ ';
        }
        $temp--;
      }
      if($x % 2 != 0){
        $disp.='<br/>';
      }
    }
    return $disp;
  }

  // 8. REVERSE ISOCELES TRIANGLE
  function DrawReverseIsocelesTriangle($num){
    $disp = '';
    $temp = 1;
    for($x = $num; $x >= 1; $x--){
      if($x % 2 != 0){
        for($y = 1; $y < $temp; $y++){
          $disp.='_ ';
        }
        for($y = 1; $y <= $x; $y++){
          $disp.='* ';
        }
        for($y = 1; $y < $temp; $y++){
          $disp.='_ ';
        }
        $temp++;
      }
      if($x % 2 != 0){
        $disp.='<br/>';
      }
    }
    
    return $disp;
  }

  // 9. HOUR GLASS
  function DrawHourGlass($num){
    $disp = '';
    $temp = 1;
    for($x = $num; $x >= 1; $x--){
      if($x % 2 != 0){
        for($y = 1; $y < $temp; $y++){
          $disp.='_ ';
        }
        for($y = 1; $y <= $x; $y++){
          $disp.='* ';
        }
        for($y = 1; $y < $temp; $y++){
          $disp.='_ ';
        }
        $temp++;
      }
      if($x % 2 != 0){
        $disp.='<br/>';
      }
    }
    $temp -= 3;
    for($x = 2; $x <= $num; $x++){
      if($x % 2 != 0){
        for($y = $temp; $y >= 1; $y--){
          $disp.='_ ';
        }
        for($y = 1; $y <= $x; $y++){
          $disp.='* ';
        }
        for($y = $temp; $y >= 1; $y--){
          $disp.='_ ';
        }
        $temp--;
      }
      if($x % 2 != 0){
        $disp.='<br/>';
      }
    }
    return $disp;
  }

  // 10. DIAMOND
  function DrawDiamond($num){
    $disp = '';
    $temp = $num / 2;
    for($x = 1; $x <= $num - 2; $x++){
      if($x % 2 != 0){
        for($y = $temp; $y >= 1; $y--){
          $disp.='_ ';
        }
        for($y = 1; $y <= $x; $y++){
          $disp.='* ';
        }
        for($y = $temp; $y >= 1; $y--){
          $disp.='_ ';
        }
        $temp--;
      }
      if($x % 2 != 0){
        $disp.='<br/>';
      }
    }
    $temp = 1;
    for($x = $num; $x >= 1; $x--){
      if($x % 2 != 0){
        for($y = 1; $y < $temp; $y++){
          $disp.='_ ';
        }
        for($y = 1; $y <= $x; $y++){
          $disp.='* ';
        }
        for($y = 1; $y < $temp; $y++){
          $disp.='_ ';
        }
        $temp++;
      }
      if($x % 2 != 0){
        $disp.='<br/>';
      }
    }
    
    return $disp;
  }

  // 11. ZERO
  function DrawZero($num){
    $disp = '';

    for($y = 1; $y <= $num; $y++){
      for($x = 1; $x <= $num; $x++){
        $y != 1 && $y != $num ? $x != 1 && $x != $num ? $disp.= "_ " : $disp.= "* " : $disp.= "* ";
      }
      $disp.='<br/>';
    }
    
    return $disp;
  }

  // 12. ARROW UP
  function DrawArrowUp($num){
    $disp = '';
    $temp = $num / 2;

    for($x = 1; $x <= $num; $x++){
      if($x % 2 != 0){
        for($y = $temp; $y >= 1; $y--){
          $disp.='_ ';
        }
        for($y = 1; $y <= $x; $y++){
          $disp.='* ';
        }
        for($y = $temp; $y >= 1; $y--){
          $disp.='_ ';
        }
        $temp--;
      }
      if($x % 2 != 0){
        $disp.='<br/>';
      }
    }
    
    $ceil = ceil($num / 2);
    $floor = floor($num / 2);
    $first = $ceil - 1;
    $last = $ceil + 1;
    for($y = 1; $y <= $floor; $y++){
      for($x = 1; $x <= $num; $x++){
        $x >= $first && $x <= $last ? $disp.='* ' : $disp.='_ ';
      }
      $disp.='<br/>';
    }

    return $disp;
  }

  // 13. ARROW DOWN
  function DrawArrowDown($num){
    $disp = '';
    $ceil = ceil($num / 2);
    $floor = floor($num / 2);
    $first = $ceil - 1;
    $last = $ceil + 1;
    for($y = 1; $y <= $floor; $y++){
      for($x = 1; $x <= $num; $x++){
        $x >= $first && $x <= $last ? $disp.='* ' : $disp.='_ ';
      }
      $disp.='<br/>';
    }

    $temp = 1;

    for($x = $num ; $x >= 1; $x--){
      if($x % 2 != 0){
        for($y = 1; $y < $temp; $y++){
          $disp.='_ ';
        }
        for($y = 1; $y <= $x; $y++){
          $disp.='* ';
        }
        for($y = 1; $y < $temp; $y++){
          $disp.='_ ';
        }
        $temp++;
      }
      if($x % 2 != 0){
        $disp.='<br/>';
      }
    }

    return $disp;
  }

  // 14. X
  function DrawX($num){
    $disp = '';
    $first = 1;
    $last = $num;
    for($y = 1; $y <= $num; $y++, $first++, $last--){
      for($x = 1; $x <= $num; $x++){
        $x == $first || $x == $last ? $disp.= "* " : $disp.= "_ ";
      }
      $disp.='<br/>';
    }
    
    return $disp;
  }
  
  // 15. BOW TIE
  function DrawBowTie($num){
    $disp='';
    $first = 1;
    $last = $num;
    for($y = 1; $y <= $num; $y++){
      for($x = 1; $x <= $num; $x++){
        $x <= $first || $x >= $last ? $disp.= "* " : $disp.= "_ ";
      }
      $disp.='<br/>';
      
      if($y < ceil($num / 2)){
        $first++; $last--;
      } else {
        $first--; $last++;
      }
    }
    
    return $disp;
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP LOOP | Salvador, Jefferson B.</title>
  </head>
  <body>
<?php
  echo '<br/> 1. LINE <br/>'. DrawLine($input).'<br/>';
  echo '<br/> 2. STRIPED LINE <br/>'. DrawStripedLine($input).'<br/>';
  echo '<br/> 3. SQUARE <br/>'. DrawSquare($input).'<br/>';
  echo '<br/> 4. PARALLELOGRAM <br/>'. DrawParallelogram($input).'<br/>';
  echo '<br/> 5. TRIANGLE <br/>'. DrawTriangle($input).'<br/>';
  echo '<br/> 6. REVERSE TRIANGLE <br/>'. DrawReverseTriangle($input).'<br/>';
  echo '<br/> 7. ISOCELES TRIANGLE <br/>'. DrawIsocelesTriangle($input).'<br/>';
  echo '<br/> 8. REVERSE ISOCELES TRIANGLE <br/>'. DrawReverseIsocelesTriangle($input).'<br/>';
  echo '<br/> 9. HOUR GLASS <br/>'. DrawHourGlass($input).'<br/>';
  echo '<br/> 10. DIAMOND <br/>'. DrawDiamond($input).'<br/>';
  echo '<br/> 11. ZERO <br/>'. DrawZero($input).'<br/>';
  echo '<br/> 12. ARROW UP <br/>'. DrawArrowUp($input).'<br/>';
  echo '<br/> 13. ARROW DOWN <br/>'. DrawArrowDown($input).'<br/>';
  echo '<br/> 14. X <br/>'. DrawX($input).'<br/>';
  echo '<br/> 15. BOW TIE <br/>'. DrawBowTie($input).'<br/>';

?>
  </body>
</html>
