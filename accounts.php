<?php include 'includes/header.php'; ?>

<section class="dashboard-page">

<aside class="sidebar">
    <div class="acc-side-info">
        <span class="yel-acc">
            SIGNED IN AS
        </span>
        <h1>
            Alex Morgan
        </h1>
        <p class="d-none d-md-block">
            alex.morgan@example.com
        </p>
    </div>
    <div class="token-box">
      <div class="token-div">
        <span class="yel-acc">
            SIGNED IN AS
        </span>
        <div class="p-t-box">
            <h1>
                3,450
            </h1>
            <p>
                tokens
            </p>
        </div>
        <p class="token-hint">
            Around 8 more storybooks.
        </p>
        <button class="buy-now-button btn d-none d-md-block w-100">
            Buy more tokens <span>&#8594;</span>
        </button>
      </div>
      <button class="buy-now-button d-block d-md-none">
            Buy
      </button>
    </div>
    <div class="acc-tabs w-100">
      <div class="tab-buttons">
        <button class="tab-btn active" data-tab="library">Library</button>
        <button class="tab-btn" data-tab="invoices">Invoices</button>
        <button class="tab-btn" data-tab="details">My details</button>
      </div>
        <button class="tab-btn logout-tab" style="border-top:1px solid rgba(243, 238, 228, 0.10);">Log out</button>
    </div>
  
</aside>

<div class="accounts-content">

  <!-- LIBRARY -->
  <section class="acc-panel active" id="panel-library">
    <h1 class="ac-tabh1">Theo's library</h1>
    <p class="ac-tabp">Twelve books so far. Read them here or download the PDF.</p>

    <div class="library-card-grid">
      <div class="library-card-box">
        <div class="library-card">
          <img src="img/story-cover2.png" alt="">
          <div class="library-card-texts">
            <h1>
              The Whispering Woods
            </h1>
            <p>
              For Theo  ·  Made 19 Aug 2026
            </p>
          </div>
        </div>
        <div class="read-download">
          <a href="">read</a>
          <a href="">Download PDF</a>
        </div>
       </div>
       <div class="library-card-box">
        <div class="library-card">
          <img src="img/story-cover2.png" alt="">
          <div class="library-card-texts">
            <h1>
              The Whispering Woods
            </h1>
            <p>
              For Theo  ·  Made 19 Aug 2026
            </p>
          </div>
        </div>
        <div class="read-download">
          <a href="">read</a>
          <a href="">Download PDF</a>
        </div>
       </div>
       <div class="library-card-box">
        <div class="library-card">
          <img src="img/story-cover2.png" alt="">
          <div class="library-card-texts">
            <h1>
              The Whispering Woods
            </h1>
            <p>
              For Theo  ·  Made 19 Aug 2026
            </p>
          </div>
        </div>
        <div class="read-download">
          <a href="">read</a>
          <a href="">Download PDF</a>
        </div>
       </div>
       <div class="library-card-box">
        <div class="library-card">
          <img src="img/story-cover2.png" alt="">
          <div class="library-card-texts">
            <h1>
              The Whispering Woods
            </h1>
            <p>
              For Theo  ·  Made 19 Aug 2026
            </p>
          </div>
        </div>
        <div class="read-download">
          <a href="">read</a>
          <a href="">Download PDF</a>
        </div>
       </div>
       <div class="library-card-box">
        <div class="library-card">
          <img src="img/story-cover2.png" alt="">
          <div class="library-card-texts">
            <h1>
              The Whispering Woods
            </h1>
            <p>
              For Theo  ·  Made 19 Aug 2026
            </p>
          </div>
        </div>
        <div class="read-download">
          <a href="">read</a>
          <a href="">Download PDF</a>
        </div>
       </div>
       <div class="library-card-box">
        <div class="library-card">
          <img src="img/story-cover2.png" alt="">
          <div class="library-card-texts">
            <h1>
              The Whispering Woods
            </h1>
            <p>
              For Theo  ·  Made 19 Aug 2026
            </p>
          </div>
        </div>
        <div class="read-download">
          <a href="">read</a>
          <a href="">Download PDF</a>
        </div>
       </div>
       <div class="library-card-box">
        <div class="library-card">
          <img src="img/story-cover4.png" alt="">
          <div class="library-card-texts">
            <h1>
              The Whispering Woods
            </h1>
            <p>
              For Theo  ·  Made 19 Aug 2026
            </p>
          </div>
        </div>
        <div class="read-download">
          <a href="">read</a>
          <a href="">Download PDF</a>
        </div>
       </div>
       <div class="library-card-box">
        <div class="library-card">
          <img src="img/storycover3.png" alt="">
          <div class="library-card-texts">
            <h1>
              The Whispering Woods
            </h1>
            <p>
              For Theo  ·  Made 19 Aug 2026
            </p>
          </div>
        </div>
        <div class="read-download">
          <a href="">read</a>
          <a href="">Download PDF</a>
        </div>
      </div>
    </div>

    <!-- =================================
         PAGINATION
    ================================== -->
    <div
        class="library-pagination"
        id="libraryPagination">
    </div>

  </section>

  <!-- INVOICES -->
  <section class="acc-panel" id="panel-invoices">
    <h1 class="ac-tabh1">YOUR INVOICES</h1>
    <p class="ac-tabp">Every order, with its invoice.</p>
    <div class="invoice-table">
      <table width=100% cellspacing="0" cellpadding="0">
        <tr>
          <td>
            <p class="inv-headp">
              REFERENCE
            </p>
          </td>
          <td>
            <p class="inv-headp">
              DATE
            </p>
          </td>
          <td>
            <p class="inv-headp">
              ITEM
            </p>
          </td>
          <td>
            <p class="inv-headp">
              TOTAL
            </p>
          </td>
          <td>
            <p class="inv-headp">
              INVOICE
            </p>
          </td>
        </tr>
        <tr>
          <td colspan="5" style="border-bottom:1px solid rgba(169, 115, 42, 0.30);height:20px;"></td>
        </tr>
        <tr>
          <td colspan="5" style="height:20px;"></td>
        </tr>
        <tr>
          <td class="inv-data-line">
            <p class="inv-np">
              TYT-4821
            </p>
          </td>
          <td class="inv-data-line">
            <p class="inv-np">
              28 Aug 2026
            </p>
          </td>
          <td class="inv-data-line">
            <p class="inv-np">
              Gold Package, 4,500 tokens
            </p>
          </td>
          <td class="inv-data-line">
            <p class="inv-np">
              $180.00
            </p>
          </td>
          <td class="inv-data-line">
            <a href="" class="inv-download">Download</a>
          </td>
        </tr>
        <tr>
          <td colspan="5" style="height:20px;"></td>
        </tr>
        <tr>
          <td class="inv-data-line">
            <p class="inv-np">
              TYT-4821
            </p>
          </td>
          <td class="inv-data-line">
            <p class="inv-np">
              28 Aug 2026
            </p>
          </td>
          <td class="inv-data-line">
            <p class="inv-np">
              Gold Package, 4,500 tokens
            </p>
          </td>
          <td class="inv-data-line">
            <p class="inv-np">
              $180.00
            </p>
          </td>
          <td class="inv-data-line">
            <a href="" class="inv-pending">pending</a>
          </td>
        </tr>
      </table>
    </div>

    <div class="invoice-table-mob">
      <div class="inv-mob-data">
        <div class="inv-mob-line">
          <p>
            TYT-4821
          </p>
          <p>
            $180.00
          </p>
        </div>
        <p class="inv-packages">
          Gold Package, 4,500 tokens  ·  28 Aug 2026
        </p>
        <a href="" class="inv-download">Download Invoice</a>
      </div>
      <div class="inv-mob-data">
        <div class="inv-mob-line">
          <p>
            TYT-4821
          </p>
          <p>
            $180.00
          </p>
        </div>
        <p class="inv-packages">
          Gold Package, 4,500 tokens  ·  28 Aug 2026
        </p>
        <a href="" class="inv-download">Download Invoice</a>
      </div>
    </div>


    <!-- empty invoice start -->
    
    <!-- <div class="empty-invoice">
      <h1 class="ac-tabh1">Theo’s library</h1>
      <div class="empty-box">
        <img src="img/emptymark.png" alt="">
        <h1>
          No books here yet.
        </h1>
        <p>
          Answer four short questions and the first one lands right here.
        </p>
        <button class="buy-now-button">
            Make their first storybook <span>&#8594;</span>
        </button>
      </div>
     </div> -->
     
    <!-- empty invoice end -->
  </section>

  <!-- DETAILS -->
  <section class="acc-panel" id="panel-details">
    <h1 class="ac-tabh1">My details.</h1>
    <p class="ac-tabp">The name on the invoice and where receipts go.</p>
    <form class="acc-det-form">
      <div class="acc-inp-box">
        <label for="">Your name</label>
        <input type="text" placeholder="Alex Morgan" class="acc-inp">
      </div>
      <div class="acc-inp-box">
        <label for="">Email</label>
        <input type="text" placeholder="alex.morgan@example.com" class="acc-inp">
      </div>
      <div class="acc-inp-box">
        <label for="">Address</label>
        <input type="text" placeholder="14 Lantern Row" class="acc-inp">
      </div>
      <div class="acc-inp-line">
        <div class="acc-inp-box w-100">
          <label for="">City</label>
          <input type="text" placeholder="Bristol" class="acc-inp">
        </div>
        <div class="acc-inp-box w-100">
          <label for="">Postcode</label>
          <input type="text" placeholder="BS1 4TR" class="acc-inp">
        </div>
      </div>
      <div class="acc-inp-box">
        <label for="">Country</label>
        <select name="" id="" class="acc-inp form-select">
          <option value="">United Kingdom</option>
          <option value="">India</option>
          <option value="">China</option>
        </select>
      </div>
      <button class="buy-now-button btn">
        Save changes
      </button>
    </form>
    <form class="acc-det-form">
      <h1>Your password</h1>
      <div class="acc-inp-box">
        <label for="">Current password</label>
        <input type="text" placeholder="••••••••••" class="acc-inp">
      </div>
      <div class="acc-inp-box">
        <label for="">New password</label>
        <input type="text" placeholder="At least eight characters" class="acc-inp">
      </div>
      <button class="buy-now-button btn">
        Change it
      </button>
    </form>
  </section>

</div>


</section>




<script>
  // ---- Tab switching ----
  const tabButtons = document.querySelectorAll('.tab-btn[data-tab]');
  const panels = document.querySelectorAll('.acc-panel');
  tabButtons.forEach(btn=>{
    btn.addEventListener('click', ()=>{
      tabButtons.forEach(b=>b.classList.remove('active'));
      btn.classList.add('active');
      panels.forEach(p=>p.classList.remove('active'));
      document.getElementById('panel-' + btn.dataset.tab).classList.add('active');
    });
  });
   
</script>

    <script>
    const libraryCards =
        document.querySelectorAll(".library-card-box");

    const libraryPagination =
        document.getElementById("libraryPagination");

    const libraryCardsPerPage =
    window.innerWidth >= 1700
        ? 4
        : window.innerWidth >= 1300
            ? 3
            : 4;

    let libraryCurrentPage = 1;

    function getLibraryTotalPages() {
        return Math.ceil(
            libraryCards.length / libraryCardsPerPage
        );
    }

    function showLibraryPage(page) {

        const libraryTotalPages =
            getLibraryTotalPages();

        libraryCurrentPage = page;

        libraryCards.forEach(function(card, index) {

            const startIndex =
                (page - 1) * libraryCardsPerPage;

            const endIndex =
                startIndex + libraryCardsPerPage;

            if (
                index >= startIndex &&
                index < endIndex
            ) {
                card.style.display = "";
            } else {
                card.style.display = "none";
            }

        });

        updateLibraryPagination();
    }

    function updateLibraryPagination() {

        const libraryTotalPages =
            getLibraryTotalPages();

        libraryPagination.innerHTML = "";

        for (
            let page = 1;
            page <= libraryTotalPages;
            page++
        ) {

            const pageButton =
                document.createElement("button");

            pageButton.type = "button";
            pageButton.className = "library-page-btn";
            pageButton.textContent = page;

            if (page === libraryCurrentPage) {
                pageButton.classList.add(
                    "library-page-active"
                );
            }

            pageButton.addEventListener(
                "click",
                function() {
                    showLibraryPage(page);
                }
            );

            libraryPagination.appendChild(
                pageButton
            );
        }

        const nextButton =
            document.createElement("button");

        nextButton.type = "button";
        nextButton.className = "library-next-btn";
        nextButton.innerHTML = "→";

        nextButton.disabled =
            libraryCurrentPage === libraryTotalPages;

        nextButton.addEventListener(
            "click",
            function() {

                if (
                    libraryCurrentPage <
                    libraryTotalPages
                ) {
                    showLibraryPage(
                        libraryCurrentPage + 1
                    );
                }

            }
        );

        libraryPagination.appendChild(
            nextButton
        );
    }

    // Initial load
    showLibraryPage(1);

    // Update when screen is resized
    window.addEventListener("resize", function() {

        const newCardsPerPage =
    window.innerWidth >= 1700
        ? 4
        : window.innerWidth >= 1300
            ? 3
            : 4;

        if (
            newCardsPerPage !== libraryCardsPerPage
        ) {

            libraryCardsPerPage =
                newCardsPerPage;

            libraryCurrentPage = 1;

            showLibraryPage(1);
        }

    });
</script>

<?php include 'includes/footer.php'; ?>
