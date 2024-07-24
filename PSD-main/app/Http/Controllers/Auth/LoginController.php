protected function credentials(Request $request)
{
    return ['Nama Pengguna' => $request->username, 'Sandi' => $request->password];
}
