<div class="container my-4">
    <div class="d-flex justify-content-start">
        <form action="#" method="POST">
            @csrf
            <button type="submit" class="oclean-cta-btn">SUBMIT</button>
        </form>
    </div>

    <style>
        .oclean-cta-btn {
            background: #2b2b2b;
            color: #fff;
            border: none;
            padding: 18px 28px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 14px;
            border-radius: 2px;
            box-shadow: 0 2px 0 rgba(0,0,0,0.15) inset;
        }
        .oclean-cta-btn:hover {
            background: #1f1f1f;
        }
    </style>
</div>
