<form action="{{ route('customers.store') }}" method="POST">
    @csrf
   Name: <input type="text" name="name" /><br />
   Surname: <input type="text" name="surname" /><br />
   Gender: <input type="text" name="gender" /><br />
   BirthYear <input type="text" name="birthYear" /><br />
    <input type="submit" name="submit" value="KAYDET" />
</form>
