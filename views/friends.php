<?php
echo "
<div class='friends'>
    <p>Add new friends</p>
    <form method='POST' action='friends.php'>
      <button id='people' type='submit'>Add Friend</button>
    </form> 
    <p>Set a friend to match!</p>
    <form method='POST' action='friends.php'>
      <button id='myFriends' type='submit'>Set Friend</button>
    </form> 
</div>
";