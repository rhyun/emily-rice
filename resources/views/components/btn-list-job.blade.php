<div class="border-gray"> <a class="btn-list-job" href="/list-a-job">
        <span class="circle">
            <span class="icon arrow"></span>
        </span>
        <span class="btn-list-job-text uppercase">List A Job</span>
    </a>
</div>

{{-- <a class="navbar-link" href="/list-a-job">
            <span class="icon"></span>
            <span class="uppercase">List a Job</span>
        </a> --}}
<style>
    .btn-list-job {
        position: relative;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        background: transparent;
        padding: 0;
        font-size: inherit;
        font-family: inherit;
    }

    .btn-list-job {
        width: 11rem;
        height: auto;
    }

    .btn-list-job .circle {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: relative;
        display: block;
        margin: 0;
        width: 3rem;
        height: 3rem;
        background: #282936;
        border-radius: 1.625rem;
    }

    .btn-list-job .circle .icon {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        background: #fff;
    }

    .btn-list-job .circle .icon.arrow {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        left: 0.625rem;
        width: 1.125rem;
        height: 0.125rem;
        background: none;
    }

    .btn-list-job .circle .icon.arrow::before {
        position: absolute;
        content: '';
        top: -0.25rem;
        right: 0.0625rem;
        width: 0.625rem;
        height: 0.625rem;
        border-top: 0.125rem solid #fff;
        border-right: 0.125rem solid #fff;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .btn-list-job .btn-list-job-text {
        transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 0.75rem 0;
        margin: 0 0 0 1.85rem;
        color: #282936;
        font-weight: 700;
        line-height: 1.6;
        text-align: center;
        text-transform: uppercase;
    }

    .btn-list-job:hover .circle {
        width: 100%;
    }

    .btn-list-job:hover .circle .icon.arrow {
        background: #fff;
        -webkit-transform: translate(1rem, 0);
        transform: translate(1rem, 0);
    }

    .btn-list-job:hover .btn-list-job-text {
        color: #fff;
    }
</style>
