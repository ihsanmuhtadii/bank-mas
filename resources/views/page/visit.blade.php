<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detail Page</h4>
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td>{{ $page->title }}</td>
                            </tr>
                            <tr>
                                <td>Content</td>
                                <td>{{ $page->content }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->