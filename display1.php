<table>

<tr>
    <th>BookName</th>
    <th>BookId</th>
    <th>BookTitle</th>
    <th>BookAuthor</th>
    <th>Bookprice</th>
</tr>

<?php foreach($data['display1'] as $post): ?>

<tr>
    
<td> <?=$post->bookname?>   </td>
<td> <?=$post->bookid?>     </td>
<td> <?=$post->booktitle?>  </td>
<td> <?=$post->bookauthor?> </td>
<td> <?=$post->bookprice?>  </td>
<tr>

<?php endforeach ?>

</table>