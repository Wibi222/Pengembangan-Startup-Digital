use Illuminate\Support\Facades\Hash;

protected function create(array $data)
{
    return User::create([
        'username' => $data['username'],
        'password' => Hash::make($data['password']),
    ]);
}
