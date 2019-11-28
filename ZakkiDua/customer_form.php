<a href="index.php?page=new_project"> Back </a>

<form action="index.php?page=add_customer" method="post" class="form-order">

    <input type="text" name="name" id="name" placeholder="Name">
    <br>

    <input type="email" name="email" id="email" placeholder="Email">
    <br>

    <select name="plan" id="plan" aria-placeholder="Plan">
        <option value="basic">Basic</option>
        <option value="premium">Premium</option>
    </select>
    <br>

    <textarea type="text" name="description" id="description" placeholder="Description" style="height:200px"></textarea>
    <br>
    <button type="submit" class="button">Add</button>
</form>