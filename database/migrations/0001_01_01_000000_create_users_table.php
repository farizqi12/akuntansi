<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Users
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'user']);
            $table->rememberToken();
            $table->timestamps();
        });

        // Usahas
        Schema::create('usahas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('jenis');
            $table->string('logo');
            $table->string('deskripsi_usaha');
            $table->string('alamat');
            $table->string('contact');
            $table->timestamps();
        });

        // Password Reset Tokens
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Sessions
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // Accounts
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_id')->constrained('usahas')->onDelete('cascade');
            $table->string('account_code', 20);
            $table->string('account_name', 100);
            $table->enum('account_type', ['Asset', 'Liability', 'Equity', 'Revenue', 'Expense', 'Other']);
            $table->decimal('opening_balance', 15, 2)->default(0);
            $table->decimal('balance', 15, 2)->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Services
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_id')->constrained('usahas')->onDelete('cascade');
            $table->string('service_name');
            $table->decimal('price', 15, 2);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Assets
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_id')->constrained('usahas')->onDelete('cascade');
            $table->string('asset_name');
            $table->enum('asset_group', ['group_1', 'group_2', 'group_3', 'building', 'other']);
            $table->decimal('acquisition_value', 15, 2);
            $table->integer('useful_life');
            $table->decimal('residual_value', 15, 2);
            $table->decimal('depreciation_value', 15, 2)->nullable();
            $table->decimal('book_value', 15, 2)->nullable();
            $table->timestamps();
        });

        // Customers
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_id')->constrained('usahas')->onDelete('cascade');
            $table->string('customer_code');
            $table->string('customer_name');
            $table->text('address')->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('email')->nullable();
            $table->enum('category', ['retail', 'wholesale', 'corporate'])->default('retail');
            $table->timestamps();
            $table->softDeletes();
        });

        // Transactions
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_id')->constrained('usahas')->onDelete('cascade');
            $table->string('transaction_number');
            $table->foreignId('user_id')->constrained('users')->onDelete('restrict');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('restrict');
            $table->date('transaction_date');
            $table->enum('transaction_type', ['sale', 'purchase', 'receipt', 'expense', 'other']);
            $table->decimal('amount', 15, 2)->default(0);
            $table->enum('status', ['credit', 'cash', 'pending']);
            $table->text('description')->nullable();
            $table->boolean('is_posted')->default(true);
            $table->foreignId('created_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
            $table->index('transaction_date');
        });

        // Journals
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_id')->constrained('usahas')->onDelete('cascade');
            $table->string('journal_number')->nullable();
            $table->foreignId('transaction_id')->nullable()->constrained('transactions')->onDelete('restrict');
            $table->foreignId('account_id')->constrained('accounts')->onDelete('restrict');
            $table->date('journal_date');
            $table->decimal('debit_amount', 15, 2)->default(0);
            $table->decimal('credit_amount', 15, 2)->default(0);
            $table->text('description')->nullable();
            $table->boolean('is_posted')->default(false);
            $table->foreignId('created_by')->constrained('users')->onDelete('restrict');
            $table->foreignId('updated_by')->constrained('users')->onDelete('restrict');
            $table->timestamps();
            $table->index('journal_date');
        });

        // Credits
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_id')->constrained('usahas')->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('restrict');
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('restrict');
            $table->date('transaction_date');
            $table->decimal('total_amount', 15, 2);
            $table->decimal('down_payment', 15, 2)->default(0);
            $table->decimal('remaining_amount', 15, 2);
            $table->enum('status', ['unpaid', 'paid'])->default('unpaid');
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        // Receivables
        Schema::create('receivables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_id')->constrained('usahas')->onDelete('cascade');
            $table->foreignId('credit_id')->constrained('credits')->onDelete('restrict');
            $table->date('payment_date');
            $table->decimal('payment_amount', 15, 2);
            $table->string('payment_method', 50);
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        // Loans
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usaha_id')->constrained('usahas')->onDelete('cascade');
            $table->string('lender_name');
            $table->string('type');
            $table->text('address')->nullable();
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->decimal('balance', 15, 2)->default(0);
            $table->foreignId('account_id')->constrained('accounts')->onDelete('cascade');
            $table->timestamps();
        });

        // Loan Transactions
        Schema::create('loan_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id')->constrained()->onDelete('cascade');
            $table->foreignId('journal_id')->constrained()->onDelete('cascade');
            $table->date('transaction_date');
            $table->string('type');
            $table->decimal('amount', 15, 2);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Transaction Items
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('restrict');
            $table->foreignId('service_id')->constrained('services')->onDelete('restrict');
            $table->decimal('price', 15, 2);
            $table->integer('quantity');
            $table->string('unit')->nullable();
            $table->decimal('subtotal', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_items');
        Schema::dropIfExists('loan_transactions');
        Schema::dropIfExists('loans');
        Schema::dropIfExists('receivables');
        Schema::dropIfExists('credits');
        Schema::dropIfExists('journals');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('customers');
        Schema::dropIfExists('assets');
        Schema::dropIfExists('services');
        Schema::dropIfExists('accounts');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('usahas');
        Schema::dropIfExists('users');
    }
};
