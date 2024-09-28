<form action="/login" method="POST">
    @csrf
  <input type="email" name="email">
  <input type="password" name="password">
  <button type="submit">Submit</button>
</form>
