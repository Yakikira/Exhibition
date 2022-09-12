
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    企業ユーザーとしてログインしました
                    <p>
                        <a href="top">トップに戻る</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
