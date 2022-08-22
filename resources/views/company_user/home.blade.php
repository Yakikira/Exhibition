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
                    <a href="company_user/top">戻る</a>
                </div>

            </div>
        </div>
    </div>
</div>
