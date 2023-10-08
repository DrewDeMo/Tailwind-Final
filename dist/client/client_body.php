<div class="clientNav-tabs">
    <div class="mb-8">
        <nav class="clientNav-tab-nav">
            <a href="#" data-tab="clientNav-tab1" class="clientNav-tab-link clientNav-active font-medium pr-1">
                <i class="las la-tachometer-alt text-xl mr-1" style="line-height: 1; vertical-align: bottom;"></i> Dash
            </a>
            <a href="#" data-tab="clientNav-tab3" class="clientNav-tab-link pr-1"><i class="las las la-tag text-xl mr-1"
                    style="line-height: 1; vertical-align: bottom;"></i>Offers</a>
            <a href="#" data-tab="clientNav-tab2" class="clientNav-tab-link pr-1"><i
                    class="las la-bullhorn text-xl mr-1" style="line-height: 1; vertical-align: bottom;"></i>Global
                Revisions</a>
            <a href="#" data-tab="clientNav-tab4" class="clientNav-tab-link pr-1"><i
                    class="las las la-file-archive text-xl mr-1"
                    style="line-height: 1; vertical-align: bottom;"></i>Assets</a>
            <a href="#" data-tab="clientNav-tab5" class="clientNav-tab-link pr-1"><i
                    class="las la-bullseye text-xl mr-1"
                    style="line-height: 1; vertical-align: bottom;"></i>Tracking</a>
            <a href="#" data-tab="clientNav-tab6" class="clientNav-tab-link pr-1"><i class="las la-icons text-xl mr-1"
                    style="line-height: 1; vertical-align: bottom;"></i>Credentials</a>

            <span class="clientNav-indicator"></span>
        </nav>
    </div>
    <div class="clientNav-tab-content">
        <div class="clientNav-tab-pane clientNav-active" id="clientNav-tab1"><?php include 'client/sub_dash.php'; ?>
        </div>
        <div class="clientNav-tab-pane" id="clientNav-tab2"><?php include 'client/sub_globalrev.php'; ?></div>
        <div class="clientNav-tab-pane" id="clientNav-tab3"><?php include 'client/sub_offers.php'; ?></div>
        <div class="clientNav-tab-pane" id="clientNav-tab4">Coming Soon...</div>
        <div class="clientNav-tab-pane" id="clientNav-tab5"><?php include 'client/sub_tracking.php'; ?></div>
    </div>
</div>