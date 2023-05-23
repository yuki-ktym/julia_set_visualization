## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## 課題内容

------- 以下課題内容となります ----------

成果物は以下の 3 点となります。

-   問題の回答ファイル群
-   作成したアプリケーションの概要と環境構築などを書いた Readme ファイル
-   苦労した点、特に見て欲しいところ、感想などを書いたテキスト

**問題 1**

ジュリア集合の生成と描画PHP, JavaScript を用いてジュリア集合の生成と描画を行ってください。

-   作成するアプリケーションはプロジェクト構成、モジュール構成などに配慮した構造としてください。
-   Javascript、HTML、PHP それぞれで 3rd party のライブラリは極力用いないものとする(built-in のものは OK)。
-   サーバーサイドは PHP を用い、Web Application Framework として Laravel を使用可能とする。
-   高速化が必要と思われる箇所に関しては c(c++) extension を用いも OK です。その際はビルド環境/手順を readme に表記してください。
-   Node.js を用いる場合はバージョンは v16.14 とする(用いなくても OK です)
-   JavaScript は最新の Chrome 上で動作するもの。

[http://localhost:8080/satori/julia](http://localhost:8080/satori/julia)でアクセスできるウェブページとする。

-   サーバーサイドの受け持つ部分

-   実数部最小値 min_x、
-   実数部最大値 max_x、
-   虚数部最小値 min_y、
-   虚数部最大値 max_y、

-   複素定数 comp_constをパラメータとして受け取り、なんらかの形で表現した julia 集合を返す API を実装してください。
-   ジュリア集合の生成前にパラメータが処理可能なものか、検証をし、問題があればその理由をエラーとして返す機能をつけてください。
-   採用した臨界値や色付けなどのルールは readme に表記してください。

-   JavaScript、HTML の受け持つ部分、以下の値が入力可能であること。

-   実数部最小値 min_x、
-   実数部最大値 max_x、
-   虚数部最小値 min_y、
-   虚数部最大値 max_y、
-   複素定数 comp_const
-   JavaScript で上記の API にアクセスし、API の戻りを解釈し、web ページの遷移なく、ジュリア集合を HTML に描画、あるいはエラーの表示をしてください。

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
