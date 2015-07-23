namespace Apriori
{
    partial class ViewDB
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            this.ProgressBar1 = new System.Windows.Forms.ProgressBar();
            this.button1 = new System.Windows.Forms.Button();
            this.label2 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.dataGridView1 = new System.Windows.Forms.DataGridView();
            this.aPDataSet = new Apriori.APDataSet();
            this.bOOKSBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.bOOKSTableAdapter = new Apriori.APDataSetTableAdapters.BOOKSTableAdapter();
            this.iDDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.jAVADataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.dBMSDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.cPPDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.codeCompleteDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.netWorkDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.aSPDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.hTMLDataGridViewTextBoxColumn = new System.Windows.Forms.DataGridViewTextBoxColumn();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.aPDataSet)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bOOKSBindingSource)).BeginInit();
            this.SuspendLayout();
            // 
            // ProgressBar1
            // 
            this.ProgressBar1.Location = new System.Drawing.Point(85, 336);
            this.ProgressBar1.Name = "ProgressBar1";
            this.ProgressBar1.Size = new System.Drawing.Size(478, 39);
            this.ProgressBar1.TabIndex = 1;
            this.ProgressBar1.Visible = false;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(125, 336);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(116, 23);
            this.button1.TabIndex = 2;
            this.button1.Text = "View DataBase";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Cambria", 12F);
            this.label2.Location = new System.Drawing.Point(196, 316);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(56, 19);
            this.label2.TabIndex = 5;
            this.label2.Text = "Label3";
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.FlatStyle = System.Windows.Forms.FlatStyle.Flat;
            this.label1.Font = new System.Drawing.Font("Cambria", 12F);
            this.label1.Location = new System.Drawing.Point(81, 314);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(56, 19);
            this.label1.TabIndex = 6;
            this.label1.Text = "Label1";
            // 
            // dataGridView1
            // 
            this.dataGridView1.AutoGenerateColumns = false;
            this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridView1.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.iDDataGridViewTextBoxColumn,
            this.jAVADataGridViewTextBoxColumn,
            this.dBMSDataGridViewTextBoxColumn,
            this.cPPDataGridViewTextBoxColumn,
            this.codeCompleteDataGridViewTextBoxColumn,
            this.netWorkDataGridViewTextBoxColumn,
            this.aSPDataGridViewTextBoxColumn,
            this.hTMLDataGridViewTextBoxColumn});
            this.dataGridView1.DataSource = this.bOOKSBindingSource;
            this.dataGridView1.Location = new System.Drawing.Point(2, -1);
            this.dataGridView1.Name = "dataGridView1";
            this.dataGridView1.Size = new System.Drawing.Size(854, 222);
            this.dataGridView1.TabIndex = 0;
            this.dataGridView1.Visible = false;
            // 
            // aPDataSet
            // 
            this.aPDataSet.DataSetName = "APDataSet";
            this.aPDataSet.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // bOOKSBindingSource
            // 
            this.bOOKSBindingSource.DataMember = "BOOKS";
            this.bOOKSBindingSource.DataSource = this.aPDataSet;
            // 
            // bOOKSTableAdapter
            // 
            this.bOOKSTableAdapter.ClearBeforeFill = true;
            // 
            // iDDataGridViewTextBoxColumn
            // 
            this.iDDataGridViewTextBoxColumn.DataPropertyName = "ID";
            this.iDDataGridViewTextBoxColumn.HeaderText = "ID";
            this.iDDataGridViewTextBoxColumn.Name = "iDDataGridViewTextBoxColumn";
            // 
            // jAVADataGridViewTextBoxColumn
            // 
            this.jAVADataGridViewTextBoxColumn.DataPropertyName = "JAVA";
            this.jAVADataGridViewTextBoxColumn.HeaderText = "JAVA";
            this.jAVADataGridViewTextBoxColumn.Name = "jAVADataGridViewTextBoxColumn";
            // 
            // dBMSDataGridViewTextBoxColumn
            // 
            this.dBMSDataGridViewTextBoxColumn.DataPropertyName = "DBMS";
            this.dBMSDataGridViewTextBoxColumn.HeaderText = "DBMS";
            this.dBMSDataGridViewTextBoxColumn.Name = "dBMSDataGridViewTextBoxColumn";
            // 
            // cPPDataGridViewTextBoxColumn
            // 
            this.cPPDataGridViewTextBoxColumn.DataPropertyName = "CPP";
            this.cPPDataGridViewTextBoxColumn.HeaderText = "CPP";
            this.cPPDataGridViewTextBoxColumn.Name = "cPPDataGridViewTextBoxColumn";
            // 
            // codeCompleteDataGridViewTextBoxColumn
            // 
            this.codeCompleteDataGridViewTextBoxColumn.DataPropertyName = "Code_Complete";
            this.codeCompleteDataGridViewTextBoxColumn.HeaderText = "Code_Complete";
            this.codeCompleteDataGridViewTextBoxColumn.Name = "codeCompleteDataGridViewTextBoxColumn";
            // 
            // netWorkDataGridViewTextBoxColumn
            // 
            this.netWorkDataGridViewTextBoxColumn.DataPropertyName = "NetWork";
            this.netWorkDataGridViewTextBoxColumn.HeaderText = "NetWork";
            this.netWorkDataGridViewTextBoxColumn.Name = "netWorkDataGridViewTextBoxColumn";
            // 
            // aSPDataGridViewTextBoxColumn
            // 
            this.aSPDataGridViewTextBoxColumn.DataPropertyName = "ASP";
            this.aSPDataGridViewTextBoxColumn.HeaderText = "ASP";
            this.aSPDataGridViewTextBoxColumn.Name = "aSPDataGridViewTextBoxColumn";
            // 
            // hTMLDataGridViewTextBoxColumn
            // 
            this.hTMLDataGridViewTextBoxColumn.DataPropertyName = "HTML";
            this.hTMLDataGridViewTextBoxColumn.HeaderText = "HTML";
            this.hTMLDataGridViewTextBoxColumn.Name = "hTMLDataGridViewTextBoxColumn";
            // 
            // ViewDB
            // 
            this.ClientSize = new System.Drawing.Size(891, 389);
            this.Controls.Add(this.dataGridView1);
            this.Name = "ViewDB";
            this.Load += new System.EventHandler(this.ViewDB_Load_1);
            ((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.aPDataSet)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bOOKSBindingSource)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.ProgressBar ProgressBar1;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Label label2;
        public System.Windows.Forms.Label label1;
        private System.Windows.Forms.DataGridView dataGridView1;
        private APDataSet aPDataSet;
        private System.Windows.Forms.BindingSource bOOKSBindingSource;
        private APDataSetTableAdapters.BOOKSTableAdapter bOOKSTableAdapter;
        private System.Windows.Forms.DataGridViewTextBoxColumn iDDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn jAVADataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn dBMSDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn cPPDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn codeCompleteDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn netWorkDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn aSPDataGridViewTextBoxColumn;
        private System.Windows.Forms.DataGridViewTextBoxColumn hTMLDataGridViewTextBoxColumn;
      
       // private AprioriDataSet aprioriDataSet;
        
    }
}