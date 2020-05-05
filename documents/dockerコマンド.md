


## よく使うコマンド
``` 
# dokerを止める
docker-compose stop
# dokerを止めて、コンテナ？を削除
docker-compose down


# appコンテナに入る
docker-compose exec app ash
```


docker volume ls
docker volume rm docker-sample_db-store



## ボリューム削除
``` 
# ボリューム確認
docker volume ls
# 指定のボリュームを削除
docker volume rm docker-sample_db-store
# ボリューム全削除
docker volume rm $(docker volume ls -qf dangling=true)

```

## DB初期化

``` 
docker-compose down --volumes --rmi all
docker-compose up -d --build
docker-compose exec app php artisan migrate
```

## appコンテナに入る
``` 
docker-compose exec app ash
```