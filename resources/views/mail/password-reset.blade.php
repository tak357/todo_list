以下のリンクからパスワードを再設定してください。<br>
<br>
<a href="{{ route('password.reset',['token' => $token]) }}">
    パスワード再設定リンク
</a>
<br><br>
リンクの有効時間は１時間です。<br>
有効時間をすぎるとリンクが無効になるのでご注意ください。<br>
<br>
このメールに心当たりのない方はお手数ですがご破棄ください。