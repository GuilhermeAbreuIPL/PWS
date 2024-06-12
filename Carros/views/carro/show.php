<div class="container">
    <h2 class="text-left top-space">Carro Index</h2>
    <h2 class="top-space"></h2>
    <div class="row">
     <div class="col-sm-12">
     <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>User</h3></th><th><h3>Marca</h3><th><h3>cilindrada</h3>
         </th>
    </th></thead>
     <tr>
     <td><?=$carro->id?></td>
     <td><?=$carro->user->nome ?></td>
         <td><?=$carro->marca->nome ?></td>
     <td><?=$carro->cilindrada?></td>
     </tr>
     </table>
    </div>
    </div>