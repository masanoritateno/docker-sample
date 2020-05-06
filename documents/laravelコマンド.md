

## 例）生徒関連の処理を作成する
```
# コントローラー作成
php artisan make:controller StudentController --resource
# モデル作成
php artisan make:model Models/Student
# マイグレーションファイル作成
php artisan make:migration create_students_table
# シーダー作成
php artisan make:seeder StudentsTableSeeder

# リクエスト作成
php artisan make:request StudentRequest


```


## laravelキャッシュクリア


```
php artisan cache:clear
php artisan config:clear
php artisan route:clear

php artisan optimize:clear

```

## 認証
``` 
composer require laravel/ui
php artisan ui bootstrap --auth


docker-compose exec node npm install
docker-compose exec node npm run dev

```

データベース
```
php artisan migrate
// DBを全削除して作り直す
php artisan migrate:refresh
// seederのデータをDBに格納
php artisan db:seed

```

## 参考

### よく使うコマンド
https://qiita.com/sola-msr/items/a09b857c5e7f7c88d01d
