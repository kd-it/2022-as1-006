FROM ubuntu:22.04
RUN apt-get update
# タイムゾーン(時刻の概念)を日本(Asia/Tokyo)にするため環境変数を設定してみましょう

# この位置でのD-Fはどうなのか問題
ARG DEBIAN_FRONTEND=non-interactive
RUN apt-get install -y tzdata
CMD ["date"]
