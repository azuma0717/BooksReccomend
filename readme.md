## Book Reccomendについて

このサイトはLaravel5を使用したおすすめの本を紹介し合うサイトです。
機能要件は以下のようになっています。

◆機能要件

</br>・新規会員登録機能
        </br>・パスワードのバリデーションチェック
        </br>・ その他項目は必須入力のバリデーションチェック
       </br>・画像アップロード機能（新規登録時には設定していません。ユーザープロフィール編集からアップロードします。）
 </br>・ログイン・ログアウト機能
 </br>・おすすめ書籍一覧表示機能
 </br>・おすすめ書籍詳細表示機能
 </br>・おすすめ書籍アップ機能
         </br>・本のタイトル
         </br>・おすすめ理由
         </br>・本の写真
 </br>・おすすめ書籍編集機能
 </br>・おすすめ書籍削除機能
 </br>・プロフィール編集機能（名前、メールアドレス、プロフィール画像のみ編集可能）


## 動きの詳細

 </br>・ヘッダーからレジスターまたはログインを選択する
 </br>・ログイン後、アップロードされている本が全て表示されているページへ遷移
 </br>・ログイン後、ヘッダーには、「本のアップロード」、「ユーザープロフィール編集」、「ユーザー名」が表示されている
 </br>・ユーザー名をクリックすると、ログアウトボタンが表示される。ログアウトすると、ログイン画面に戻る。（ログアウトしないで画面を閉じても、セッションが残るため、ログインしている状態に戻る）

 </br>・表示されている本をクリックすると、アップロードしたユーザー名と本のタイトル、画像、おすすめの理由が表示される
 </br>・ログインしているユーザー以外がアップロードした場合は、編集と削除ができない。
 </br>・自分がアップロードした本は、クリックすると削除ボタンと編集ボタンが表示される。


